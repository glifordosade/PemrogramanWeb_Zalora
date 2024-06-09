<?php

class Sport extends Controller{
    public function index(){
        $data['title'] = 'Sport';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('daftar/sport');
        $this->view('tamplate/footer');
    }
}