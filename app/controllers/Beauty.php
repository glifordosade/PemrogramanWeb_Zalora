<?php
class Beauty extends Controller{
    // menampilkan halaman kategory beauty
    public function index(){
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
            $data['wanita'] = $this->model('cardModel')->ranwanita();
        }else{
            $data['wanita'] = $this->model('cardModel')->ranwanita();
        }
        $data['title'] = 'Beauty';
        $this->view('tamplate/header',$data);
        $this->view('daftar/beauty',$data);
        $this->view('tamplate/footer');
    }
}