<?php
class Beauty extends Controller{
    // menampilkan halaman kategory beauty
    public function index(){
        $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
        $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        $data['title'] = 'Beauty';
        $this->view('tamplate/header',$data);
        $this->view('daftar/beauty');
        $this->view('tamplate/footer');
    }
}