<?php
class Home extends Controller{
    // menampilakn halaman home atau index dari website
    public function index(){
        $data['title'] = 'Home';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('home/index');
        $this->view('tamplate/footer');
    }
    
    // fungsi untuk mengatur logout user
    public function logout(){
        session_unset();
        session_destroy();
        $data['title'] = 'Home';
        // $data['isi'] = $this->model('userModel')->();
        $this->view('tamplate/header', $data);
        $this->view('home/index');
        $this->view('tamplate/footer');
    }

}