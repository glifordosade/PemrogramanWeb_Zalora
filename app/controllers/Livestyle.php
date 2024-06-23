<?php
// fungsi untuk mengatur halaman kategry hom&livestyle 
class Livestyle extends Controller{
    public function index(){
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        }else{
            $data['rek'] = $this->model('cardModel')->random();
        }
        $data['title'] = 'Home & Live Style';
        $this->view('tamplate/header',$data);
        $this->view('daftar/livestyle');
        $this->view('tamplate/footer');
    }
}