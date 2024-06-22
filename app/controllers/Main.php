<?php

class Main extends Controller{

    public function index()
    {
        $data['title'] = 'Search';
        $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
        $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        $cari = $_POST['cari'];
        $data['barang'] = $this->model('searchModel')->search($cari);
        $this->view('tamplate/header', $data );
        $this->view('daftar/main',$data);
        $this->view('tamplate/footer');
    }
    
    //mengarahkan ke halaman detail dari barang 
    public function Detail($ID){
        $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
        $data['title'] = 'Search';
        $data['barang'] = $this->model('cardModel')->PerId($ID);
        $data['cekbag'] = $this->model('cardModel')->PerIdCek($ID,$_SESSION['id']);
        $data['cekwish'] = $this->model('cardModel')->PerIdCekWish($ID,$_SESSION['id']);
        // var_dump($data['bag']);
        $this->view('tamplate/header', $data );
        $this->view('daftar/detail',$data);
        $this->view('tamplate/footer');
    }
}