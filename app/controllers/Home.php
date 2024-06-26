<?php
class Home extends Controller{
    // menampilakn halaman home atau index dari website
    public function index(){
        if(isset($_SESSION['id'])){
            $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
            $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
            $data['rek'] = $this->model('cardModel')->rek($_SESSION['gen']);
        }else{
            $data['rek'] = $this->model('cardModel')->random();
        }
        $data['title'] = 'Home';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('home/index',$data);
        $this->view('tamplate/footer');
    }
    
    // fungsi untuk mengatur logout user
    public function logout(){
        session_unset();
        session_destroy();
        header("Location: ".BASEURL);
    }

}