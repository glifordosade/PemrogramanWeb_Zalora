<?php

class Authread extends Controller{
    
    // menampilkan halaman daftar barang yang sudah di tambahkan
    public function index(){
        $data['bag'] = $this->model('cardModel')->sumBag($_SESSION['id']);
        $data['wish'] = $this->model('cardModel')->sumWish($_SESSION['id']);
        $data['title'] = 'Daftar Barang';
        $data['barang'] = $this->model('cardModel')->read();
        $this->view('tamplate/header1', $data );
        $this->view('akun/authread',$data);
        $this->view('tamplate/footer');
    }

    // kontroller untuk menghapus barang
    public function Hapus($ID){
        // $data['title'] = 'Daftar Barang';
        $namaGambar['gambar'] = $this->model('cardModel')->Gambar($ID);
        $nam = $namaGambar['gambar'];
        $location = "gambar/".$nam['Pic'];
        if (file_exists($location)) {
            unlink('gambar/' . $nam["Pic"]);
            var_dump($namaGambar);
	    }
        $dat['barang'] = $this->model('cardModel')->Hapus($ID);
        Flasher::setFlash('Barang dihapus','hapus','red');
        header("Location: ".BASEURL."/Authread");
    
    }


}   