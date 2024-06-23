<?php
class Ubahdatakun extends Controller{
    // menampilkan form untuk perubahan Password
    public function index($a=null){
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        }else{
            $data['rek'] = $this->model('cardModel')->random();
        }
        $data['title'] = 'Ubah Password';
        $data['data'] = $a;
        $data['userdat'] = $this->model('userModel')->Alldata($_SESSION['id']);
        $this->view('tamplate/header1', $data);
        $this->view('akun/ubahpass',$data);
        $this->view('tamplate/footer');
    }

    // controller untuk merubah password
    public function Pass(){
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $phone = (int) $_POST['phone'];
        $ttl = $_POST['ttl'];
        $Alamat = $_POST['alamat'];
        $pos = (int)$_POST['pos'];
        $id = $_POST['id'];
        
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        $passlama = $_POST['passlama'];

        // var_dump($_POST);
        $cekpass = $this->model('userModel')->cekPass($id,$passlama);

        if(($cekpass==1)AND($pass1==$pass2)){
            if($this->model('userModel')->updateUser($id,$email,$fname,$lname,$pass1,$gender,$phone,$ttl,$Alamat,$pos)>0){
                header("Location: ".BASEURL."/Account");
            }else{
                $note['data'] = '1';
                header("Location: ".BASEURL."/Ubahdatakun/index/".$note['data']);
            }
        }else{
            $note['data'] = '1';
            header("Location: ".BASEURL."/Ubahdatakun/index/".$note['data']);
        }
    }

    public function Data(){
        // menampilkan jumlah bag dan wishlist
        $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
        $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);

        $data['title'] = 'Ubah Biodata';
        $data['userdat'] = $this->model('userModel')->Alldata($_SESSION['id']);
        $this->view('tamplate/header1', $data);
        $this->view('akun/ubahdata',$data);
        $this->view('tamplate/footer');
    }

    // untuk update data user
    public function Datauser(){
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $phone = (int) $_POST['phone'];
        $ttl = $_POST['ttl'];
        $Alamat = $_POST['alamat'];
        $pos = (int)$_POST['pos'];
        $id = $_POST['id'];
        
        $pass1 = $_POST['pass'];

        // var_dump($_POST);

        if($this->model('userModel')->updateUser($id,$email,$fname,$lname,$pass1,$gender,$phone,$ttl,$Alamat,$pos)>0){
            header("Location: ".BASEURL."/Account");
        }else{
            header("Location: ".BASEURL."/Ubahdatakun");
        }
    }

    // untuk update alamat user
    public function alamat(){
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $phone = (int) $_POST['phone'];
        $ttl = $_POST['ttl'];
        $Alamat = $_POST['alamat'];
        $pos = (int)$_POST['pos'];
        $id = $_POST['id'];
        $pass1 = $_POST['pass'];
        

        // var_dump($_POST);

        if($this->model('userModel')->updateUser($id,$email,$fname,$lname,$pass1,$gender,$phone,$ttl,$Alamat,$pos)>0){
        header("Location: ".BASEURL."/Account");
        }else{
            header("Location: ".BASEURL."/Ubahdatakun");
        }
    }
}

?>