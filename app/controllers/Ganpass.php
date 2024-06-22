<?php
class Ganpass extends Controller{
    public function index(){
        $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
        $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        $data['title'] = 'Ganti password';
        $this->view('tamplate/header1', $data);
        $this->view('akun/ganpass');
        $this->view('tamplate/footer');
    }
}

?>