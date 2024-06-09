<?php

class Luxury extends Controller{
    public function index(){
        $data['title'] = 'Luxury';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('daftar/luxury');
        $this->view('tamplate/footer');
    }
}