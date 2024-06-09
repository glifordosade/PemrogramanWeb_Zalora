<?php

class Bag extends Controller{
    
    public function index(){
        $data['title']='Bag';
        $this->view('tamplate/header',$data);
        $this->view('home/bag',);
        $this->view('tamplate/footer');
    }


}