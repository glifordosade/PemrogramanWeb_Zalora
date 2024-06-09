<?php

class Main extends Controller{

    public function index()
    {
        $data['title'] = 'Search';
        $cari = $_POST['pencarian'];
        // var_dump($_POST);
        $data['barang'] = $this->model('searchModel')->search($cari);
        $this->view('tamplate/header', $data );
        $this->view('daftar/main',$data);
        $this->view('tamplate/footer');
    }

    public function Detail($ID){
        $data['title'] = 'Search';
        $data['barang'] = $this->model('cardModel')->PerId($ID);
        $this->view('tamplate/header', $data );
        $this->view('daftar/detail',$data);
        $this->view('tamplate/footer');
    }
}