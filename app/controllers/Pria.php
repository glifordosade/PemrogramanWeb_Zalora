<?php

class Pria extends Controller{
    // menammpilkan halaman  halaman kategory pria
    public function index(){
        $data['title'] = 'Pria';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('daftar/pria');
        $this->view('tamplate/footer');
    }
}