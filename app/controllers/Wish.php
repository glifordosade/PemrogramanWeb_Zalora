<?php
class Wish extends Controller{
    public function index($id=null)
    {
        $da['title'] = 'Wishlist saya';
        if ($id!=null) {
            $data['show'] = $this->model('wishModel')->show($id);
            $data['rek'] = $this->model('wishModel')->rekomendasi();
            $this->view('tamplate/header',$da);
            $this->view('home/wishlist',$data);
            $this->view('tamplate/footer');
        }else{
            $data['rek'] = $this->model('wishModel')->rek();
            $this->view('tamplate/header',$da);
            $this->view('home/wishlist',$data);
            $this->view('tamplate/footer');
        }
    }

    // public function tambWish(){
        
    // }
}

