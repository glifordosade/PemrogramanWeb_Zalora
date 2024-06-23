<?php

class Sport extends Controller{
    // menampilkan halaman kategory sport
    public function index(){
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        }else{
            $data['sport'] = $this->model('cardModel')->ransport();
        }
        $data['title'] = 'Sport';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('daftar/sport',$data);
        $this->view('tamplate/footer');
    }
}