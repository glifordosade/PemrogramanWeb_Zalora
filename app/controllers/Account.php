<?php
// kontroller untuk menampilkan halaman utama pengaturan akun
class Account extends Controller{
    public function index(){
        $data['title'] = 'Akun Saya';
        $this->view('tamplate/header1', $data);
        $this->view('akun/account');
        $this->view('tamplate/footer');
    }

    // mengatur login user
    public function log(){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $user['log'] = $this->model('userModel')->login($email,$pass);

        if($user['log']==NULL){
            Flasherf::setFlashf('Email atau Password anda salah','salah', 'indianred');
            $data['title'] = 'Masuk';
            $this->view('tamplate/header1', $data);
            $this->view('Regist/pelma');
            $this->view('tamplate/footer');
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