<?php
class Ganpass extends Controller{
    public function index(){
        $data['title'] = 'Ganti password';
        $this->view('tamplate/header1', $data);
        $this->view('akun/ganpass');
        $this->view('tamplate/footer');
    }
}

?>