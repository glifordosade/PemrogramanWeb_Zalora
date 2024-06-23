<?php

class Main extends Controller{

    public function index()
    {
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        }else{
            $data['rek'] = $this->model('cardModel')->random();
        }

        $data['title'] = 'Search';
        $cari = $_POST['cari'];
        $data['search'] = $cari;
        $data['barang'] = $this->model('searchModel')->search($cari);
        $this->view('tamplate/header', $data );
        $this->view('daftar/main',$data);
        $this->view('tamplate/footer');
    }
    
    //mengarahkan ke halaman detail dari barang 
    public function Detail($ID){
        if(isset($_SESSION['id'])){
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['cekbag'] = $this->model('cardModel')->PerIdCek($ID,$_SESSION['id']);
            $data['cekwish'] = $this->model('cardModel')->PerIdCekWish($ID,$_SESSION['id']);
        }else{
            $data['rek'] = $this->model('cardModel')->random1();
        }
        $data['title'] = 'Search';
        $data['barang'] = $this->model('cardModel')->PerId($ID);
        // var_dump($data['bag']);
        $this->view('tamplate/header', $data );
        $this->view('daftar/detail',$data);
        $this->view('tamplate/footer');
    }
}