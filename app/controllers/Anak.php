<?php
// menampilkan halaman kategory anak
class Anak extends Controller{
    public function index(){
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        }else{
            $data['rek'] = $this->model('cardModel')->random();
        }
        $data['title'] = 'Anak';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('daftar/anak');
        $this->view('tamplate/footer');
    }
}