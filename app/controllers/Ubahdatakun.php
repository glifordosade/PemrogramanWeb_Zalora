<?php
class Ubahdatakun extends Controller{
    public function index(){
        $data['title'] = 'Ubah Data';
        $this->view('tamplate/header1', $data);
        $this->view('akun/ubahdatakun');
        $this->view('tamplate/footer');
    }
}

?>