<?php
class Authup extends Controller{

    // tampilan halaman update
    public function index($id){
        $data['nambar'] = $this->model('cardModel')->PerId($id);
        $data['title'] = 'Edit Barang';
        $this->view('tamplate/header1', $data );
        $this->view('akun/authup',$data);
        $this->view('tamplate/footer');
    }

    public function Edit(){

        // menerima inputan dari form update
        $nambar =$_POST['nambar'];
        $harga =$_POST['harga'];
        $brand =$_POST['brand'];
        $desc =$_POST['Desc'];
        $kategory =$_POST['kategory'];
        $stock =$_POST['stock'];
        $id =$_POST['idbar'];
        $pic =$_POST['pic'];

        // update jika gambar tidak di update
        if((isset($_POST['subsub'])) && ($_FILES['pic']['tmp_name']==null)){
            $this->model('cardModel')->Ubahbarang($id,$nambar,$harga,$brand,$desc,$kategory,$pic,$stock);
            Flasher::setFlash('Barang Diubah','ditambahkan','green');
            header('Location: '.BASEURL.'/Authread');

        }else if((isset($_POST['subsub'])) && ($_FILES['pic']['tmp_name']!=null)){
            
            
            // menghapus gambar lama jika gambar baru dimasukkan
            $nam = $pic;
            $location = "gambar/".$nam;
            if (file_exists($location)) {
                unlink('gambar/' . $nam);
            }
            
            // cek apakah gambar telah di upload
            $gambar = $this->upload();
            if(!$gambar){
                    echo "<script>
                                alert('gambar gagal di upload');
                            </script>";
                    // header("Location: ".BASEURL."/Authin");
                    die;
                }
                
            if($this->model('cardModel')->Ubahbarang($id,$nambar,$harga,$brand,$desc,$kategory,$gambar,$stock)>0){
                Flasher::setFlash('Barang Diubah','ditambahkan','green');
                header('Location: '.BASEURL.'/Authread');
            }
        }
        // header('Location: '.BASEURL.'/Main');
    }

    function upload(){
        $namaImg=$_FILES['pic']['name'];
        $ukuranImg=$_FILES['pic']['size'];
        $error=$_FILES['pic']['error'];
        $tempatImg=$_FILES['pic']['tmp_name'];

    // melakukan cek apakah gambar telah diupload atau belum
        if($error === 4){
            echo "<script>
                    alert('gambar belum diupload');
                </script>";
            header('Location: '.BASEURL.'/Authup');
            die;
        }

    //  melakukan pengecekkan apakah yang diupload merupakan gambar atau tidak (gambar yang diizikan hanya png, jpg, dan jpeg)
        $formatnya = ['jpg','jpeg','png'];
        $format = strtolower(pathinfo($namaImg, PATHINFO_EXTENSION));
        if(!in_array($format,$formatnya)){
            echo "<script>
                    alert('yang dimasukkan bukan gambar');
                </script>";
            header('Location: '.BASEURL.'/Authup');
            die;
        }
        // menentukan ukuran maksimal dari file gambar
        if($ukuranImg>6000_000){
            echo "<script>
                    alert('ukuran gambar terlalu besar');
                </script>";
            header('Location: '.BASEURL.'/Autup');
            die;
        }

        // membuat nama baru dari gambar barang yang dimasukkan
        $namabaru = uniqid();
        $namabaru .= '.';
        $namabaru .= $format;

        move_uploaded_file($tempatImg,'../public/gambar/'.$namabaru);
        return $namabaru;
    }
}