<?php

class Livestyle extends Controller{
    public function index(){
        $data['title'] = 'Home & Live Style';
        $this->view('tamplate/header',$data);
        $this->view('daftar/livestyle');
        $this->view('tamplate/footer');
    }
}