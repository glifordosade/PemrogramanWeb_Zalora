<?php

class Regist extends Controller{
    public function index(){
        $data['title'] = 'Zalora | Registrasi';
        $this->view('tamplate/header1',$data);
        $this->view('Regist/pelbaru');
        $this->view('tamplate/footer');
    }

    public function pelma(){
        $data['title'] = 'Zalora | Masuk';
        $this->view('tamplate/header1',$data);
        $this->view('Regist/pelma');
        $this->view('tamplate/footer');
    }

    public function regist(){
        $email =$_POST['email'];
        $pass =$_POST['pass'];
        $gen =$_POST['gender'];
        $name =$_POST['username'];
        $tanggal =$_POST['date'];
        $bulan =$_POST['bulan'];
        $tahun =$_POST['tahun'];
        $ttl=$tahun.'-'.$bulan.'-'.$tanggal;

        if($this->model('registModel')->regist($name,$email,$pass,$gen,$ttl)>0){
            header('Location: '.BASEURL.'/Regist/pelma');
            exit;
        }
    }

    public function GantiPas(){
        $id = $_SESSION['id'];
        $pass =$_POST['pass'];
    }
}