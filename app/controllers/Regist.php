<?php

class Regist extends Controller{
    public function index(){
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        }else{
            $data['rek'] = $this->model('cardModel')->random();
        }
        // menampilkan halaman registrasi untuk user baru
        $data['title'] = 'Zalora | Registrasi';
        $this->view('tamplate/header1',$data);
        $this->view('Regist/pelbaru');
        $this->view('tamplate/footer');
    }

    // menampilkan halaman login untuk user
    public function pelma($a=null){
        $data['data'] = $a;
        $data['title'] = 'Zalora | Masuk';
        $this->view('tamplate/header1',$data);
        $this->view('Regist/pelma',$data);
        $this->view('tamplate/footer');
    }

    // memproses registrasi dari dari user baru
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