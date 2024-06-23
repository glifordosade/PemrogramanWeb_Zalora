<?php
// kontroller untuk menampilkan halaman utama pengaturan akun
class Account extends Controller{
    public function index(){
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        }
        $data['userdat'] = $this->model('userModel')->Alldata($_SESSION['id']);
        $data['title'] = 'Akun Saya';

        $this->view('tamplate/header1', $data);
        if(($data['userdat']['Alamat']==null)OR($data['userdat']['Alamat']==0)OR($data['userdat']['KodePos']==null)OR($data['userdat']['KodePos']==0)){
            $this->view('akun/account',$data);
        }else{
            $this->view('akun/account1',$data);
        }
        $this->view('tamplate/footer');
    }

    // menampilkan halaman account1
    public function account1(){
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        }
        $data['userdat'] = $this->model('userModel')->Alldata($_SESSION['id']);
        $data['title'] = 'Akun Saya';

        $this->view('tamplate/header1', $data);
        $this->view('akun/account',$data);
        $this->view('tamplate/footer');
    }

    // mengatur login user
    public function log(){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $user['log'] = $this->model('userModel')->login($email,$pass);

        if($user['log']==NULL){
            $note['data'] = '1';
            header("Location: ".BASEURL."/Regist/pelma/".$note['data']);
        }else{
            foreach($user['log'] as $a){
                $_SESSION['user'] = $a['FirstName'];
                $_SESSION['email'] = $a['Email'];
                $_SESSION['ttl'] = $a['TanggalLahir'];
                $_SESSION['id'] = $a['ID'];
                $_SESSION['gen'] = $a['Gender'];
                $_SESSION['pass'] = '......';
            }
            header('Location: '.BASEURL.'/Account');
        }
    }

    
}