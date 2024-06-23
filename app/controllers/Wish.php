<?php
class Wish extends Controller{
    public function index()
    // menampilkan halaman wishlist
    {
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
            $data['isiwish'] = $this->model('wishModel')->show($_SESSION['id']);
            $data['rek'] = $this->model('cardModel')->rek($_SESSION['gen']);
        }else{
            $data['rek'] = $this->model('cardModel')->random1();
        }
        $data["title"] = 'Wishlist';
        // var_dump($data['isiwish']);
        $this->view('tamplate/header', $data);
        $this->view('home/wishlist',$data);
        $this->view('tamplate/footer');
    }

    
    // menambahkan barang ke wishlist
    public function tambWish($id){
        $this->model('wishModel')->TambahWish($id,$_SESSION['id']);
        header('Location: '.BASEURL."/Main/detail/".$id);
    }

    // hapus dari halaman wishlist
    public function hapus($id){
        $this->model('wishModel')->Hapus($id);
        header('Location: '.BASEURL."/Wish");
    }

    // menghapus wishlist dari halaman detail
    public function hapusdetail($id){
        $this->model('wishModel')->Hapus2($id,$_SESSION['id']);
        header('Location: '.BASEURL."/Main/detail/".$id);
    }
}

