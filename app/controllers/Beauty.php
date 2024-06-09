<?php
class Beauty extends Controller{
    // menampilkan halaman kategory beauty
    public function index(){
        $data['title'] = 'Beauty';
        $this->view('tamplate/header',$data);
        $this->view('daftar/beauty');
        $this->view('tamplate/footer');
    }
}