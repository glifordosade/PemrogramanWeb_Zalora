<?php

class Pria extends Controller{
    // menammpilkan halaman  halaman kategory pria
    public function index(){
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        }else{
            $data['pria'] = $this->model('cardModel')->ranpria();
        }
        $data['title'] = 'Pria';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('daftar/pria',$data);
        $this->view('tamplate/footer');
    }
}