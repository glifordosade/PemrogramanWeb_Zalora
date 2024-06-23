<?php
// menampilkan halaman kategory user
class Luxury extends Controller{
    public function index(){
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
            $data['lux'] = $this->model('cardModel')->ranlux();
        }else{
            $data['lux'] = $this->model('cardModel')->ranlux();
        }
        $data['title'] = 'Luxury';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('daftar/luxury',$data);
        $this->view('tamplate/footer');
    }
}