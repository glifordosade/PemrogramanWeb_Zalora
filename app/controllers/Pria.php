<?php

class Pria extends Controller{
    public function index(){
        $data['title'] = 'Pria';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('daftar/pria');
        $this->view('tamplate/footer');
    }
}