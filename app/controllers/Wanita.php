<?php

class Wanita extends Controller{
    // menampilkan halaman kategory wanita
    public function index(){
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
            $data['wanita'] = $this->model('cardModel')->ranwanita();
        }else{
            $data['wanita'] = $this->model('cardModel')->ranwanita();
        }
        $data['title'] = 'Wanita';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('daftar/wanita',$data);
        $this->view('tamplate/footer');
    }
}