<?php

class Wanita extends Controller{
    // menampilkan halaman kategory wanita
    public function index(){
        $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
        $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        $data['title'] = 'Wanita';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('daftar/wanita');
        $this->view('tamplate/footer');
    }
}