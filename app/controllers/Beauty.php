<?php

class Beauty extends Controller{
    public function index(){
        $data['title'] = 'Beauty';
        $this->view('tamplate/header',$data);
        $this->view('daftar/beauty');
        $this->view('tamplate/footer');
    }
}