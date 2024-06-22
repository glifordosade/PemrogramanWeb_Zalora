<?php

class Bag extends Controller{
    
    public function index(){
        $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
        $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        $data['title']='Bag';
        $data['isibag'] = $this->model('bagModel')->show($_SESSION['id']);
        $data['isiWish'] = $this->model('wishModel')->show($_SESSION['id']);
        // var_dump($data['isibag']);
        
        $this->view('tamplate/header',$data);
        $this->view('home/bag',$data);
        $this->view('tamplate/footer');
    }

    public function cart(){
        $idbarang = (string)$_POST['barang'];
        $size =(string)$_POST['size'];
        $user = (string)$_SESSION['id'];
        // var_dump($_POST);
        // var_dump($_SESSION['id']);

        $this->model('bagModel')->Tambahbag($idbarang,$user,$size);
        header('Location: '.BASEURL."/Main/detail/".$idbarang);
    }

    // memindahkan dari wishlist ke bag dengan menghapus dari wishlist
    public function cart2(){
        $idbarang = (string)$_POST['barang'];
        $size =(string)$_POST['size'];
        $user = (string)$_SESSION['id'];
        // var_dump($_POST);
        // var_dump($_SESSION['id']);

        $this->model('wishModel')->Hapus2($idbarang,$user);
        $this->model('bagModel')->Tambahbag($idbarang,$user,$size);
        header('Location: '.BASEURL."/Wish");
    }


}