<?php
class Authread extends Controller{

    public function index(){
        $data['title'] = 'Daftar Barang';
        $data['barang'] = $this->model('cardModel')->read();
        $this->view('tamplate/header1', $data );
        $this->view('akun/authread',$data);
        $this->view('tamplate/footer');
    }

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
    public function Edit($ID){
        $data['title'] = 'Daftar Barang';
        $namaGambar['gambar'] = $this->model('cardModel')->Gambar($ID);
        $nam = $namaGambar['gambar'];
        $location = "gambar/".$nam['Pic'];
        echo $nam['Pic'];
        echo "<br>";
        echo $location;
        if (file_exists($location)) {
            unlink('gambar/' . $nam["Pic"]);
            var_dump($namaGambar);
	    }
        $dat['barang'] = $this->model('cardModel')->Edit($ID);
        Flasher::setFlash('Barang dihapus','hapus','red');
        header("Location: ".BASEURL."/Authread");
    }


}   