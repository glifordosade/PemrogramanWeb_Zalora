<?php
class Ubahdatakun extends Controller{
    public function index(){
        $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
        $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        $data['title'] = 'Ubah Data';
        $this->view('tamplate/header1', $data);
        $this->view('akun/ubahdatakun');
        $this->view('tamplate/footer');
    }
}

?>