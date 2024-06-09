<?php

class Anak extends Controller{
    public function index(){
        $data['title'] = 'Anak';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('daftar/anak');
        $this->view('tamplate/footer');
    }
}