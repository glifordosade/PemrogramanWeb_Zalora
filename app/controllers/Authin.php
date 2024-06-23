<?php
class Authin extends Controller{
    // menampilkan halaman tambah barang
    public function index(){
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        }else{
            $data['rek'] = $this->model('cardModel')->random();
        }
        $data['title'] = 'Tambah Barang';
        $this->view('tamplate/header1', $data );
        $this->view('akun/authin',);
        $this->view('tamplate/footer');
    }

    // mengtur penambahan data barang baru
    public function Tambah(){
        $nambar =$_POST['nambar'];
        $harga =$_POST['harga'];
        $brand =$_POST['brand'];
        $desc =$_POST['Desc'];
        $kategory =$_POST['kategory'];
        $stock =$_POST['stock'];
        $size =$_POST['size'];
        // file gambar

        $gambar = $this->upload();
        // var_dump($gambar);
        if(!$gambar){
            echo "<script>
                        alert('gambar gagal di upload');
                    </script>";
            // header("Location: ".BASEURL."/Authin");
            die;
        }


        if($this->model('cardModel')->Tam($nambar,$harga,$brand,$desc,$kategory,$gambar,$stock,$size)>0){
            header('Location: '.BASEURL.'/Authread');
            exit;
        }

    }

    // fungsi upload untuk menyeleksi file yang dimasukkan
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
                header('Location: '.BASEURL.'/Authin');
        }

    //  melakukan pengecekkan apakah yang diupload merupakan gambar atau tidak 
        $formatnya = ['jpg','jpeg','png'];
        $format = strtolower(pathinfo($namaImg, PATHINFO_EXTENSION));
        if(!in_array($format,$formatnya)){
            echo "<script>
                    alert('yang dimasukkan bukan gambar');
                </script>";
            header('Location: '.BASEURL.'/');
        }

        if($ukuranImg>6000_000){
            echo "<script>
                    alert('ukuran gambar terlalu besar');
                </script>";
            header('Location: '.BASEURL.'/Main');
        }

        $namabaru = uniqid();
        $namabaru .= '.'.$format;
        

        move_uploaded_file($tempatImg,'../public/gambar/'.$namabaru);
        return $namabaru;
    }
}