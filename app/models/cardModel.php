<?php

class cardModel{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function All(){
        $this->db->Query("SELECT * FROM barang");
        return $this->db->resultset();
    }
    
    public function read(){
        $this->db->Query("SELECT Id_Barang,nambar FROM barang");
        return $this->db->resultset();
    }
    // public function read1($id){
    //     $this->db->Query("SELECT nambar FROM barang WHERE Id_Barang = :id");
    //     $this->db->bind('id',$id);
    //     return $this->db->single();
    // }



    // menghapus barang dengan id tertentu dari 
    public function Hapus($ID){
        $this->db->Query("DELETE FROM barang WHERE Id_Barang=:id");
        $this->db->bind('id',$ID);
        return $this->db->single();
    }

    // mengambil barang dengan id tertentu untuk ditampilkan
    public function PerId($ID){
        $this->db->Query("SELECT * FROM barang WHERE Id_Barang=:id");
        $this->db->bind('id',$ID);
        return $this->db->single();
    
    }

    // melakukan pengecekkan apakah ada barang dengan id tertentu di keranjang
    public function PerIdCek($ID,$user){
        $this->db->Query("SELECT * FROM keranjang WHERE Id_Barang=:id AND Id_user=:user");
        $this->db->bind('id',$ID);
        $this->db->bind('user',$user);
        $this->db->single();
        return $this->db->rowCount();
    }

    // melakukan pengecekkan apakah ada barang dengan id tertentu di Wishlist
    public function PerIdCekWish($ID,$user){
        $this->db->Query("SELECT * FROM wishlistid WHERE Id_Barang=:id AND Id_user=:user");
        $this->db->bind('id',$ID);
        $this->db->bind('user',$user);
        $this->db->single();
        return $this->db->rowCount();
    }

    // mangamgbil jumlah barang yang ada di keranjang dengan id user tertentu
    public function sumBag($ID){
        $this->db->Query("SELECT * FROM keranjang WHERE Id_user=:id");
        $this->db->bind('id',$ID);
        $this->db->single();
        return $this->db->rowCount();
    
    
    }
    // mangamgbil jumlah barang yang ada di keranjang dengan id user tertentu
    public function sumWish($ID){
        $this->db->Query("SELECT * FROM Wishlistid WHERE Id_user=:id");
        $this->db->bind('id',$ID);
        $this->db->single();
        return $this->db->rowCount();
    
    }

    // rekomendasi
    public function rek($gen){
        $this->db->Query("SELECT * FROM barang WHERE kategory LIKE :id LIMIT 4");
        $this->db->bind('id','%'.$gen.'%');
        return $this->db->resultset();
    
    }


    // rekomendasi random
    public function random(){
        $this->db->Query("SELECT * FROM barang ORDER BY RAND() LIMIT 4");
        return $this->db->resultset();
    
    }
    // rekomendasi random1
    public function random1(){
        $this->db->Query("SELECT * FROM barang ORDER BY RAND() LIMIT 8");
        return $this->db->resultset();
    
    }

    // rekomendasi random wanitia
    public function ranwanita(){
        $this->db->Query("SELECT * FROM barang WHERE kategory LIKE '%wanita%' OR '%perempuan%' ORDER BY RAND() LIMIT 4");
        return $this->db->resultset();
    
    }

    // rekomendasi random pria
    public function ranpria(){
        $this->db->Query("SELECT * FROM barang WHERE kategory LIKE '%pria%' OR '%laki-laki%' OR '%laki%' ORDER BY RAND() LIMIT 4");
        return $this->db->resultset();
    
    }

    // rekomendasi random sport
    public function ransport(){
        $this->db->Query("SELECT * FROM barang WHERE kategory LIKE '%sport%' OR '%olahraga%' OR '%raga%' OR '%olah%' ORDER BY RAND() LIMIT 4");
        return $this->db->resultset();
    
    }
    // rekomendasi random anak
    public function rananak(){
        $this->db->Query("SELECT * FROM barang WHERE kategory LIKE '%anak%' OR '%kid%' OR '%child%' ORDER BY RAND() LIMIT 4");
        return $this->db->resultset();
    
    }
    // rekomendasi random luxury
    public function ranlux(){
        $this->db->Query("SELECT * FROM barang WHERE kategory LIKE '%lux%' OR '%wanita%' OR '%jewel%' OR '%cincin%' OR '%kalung%'OR '%perhiasan%'  ORDER BY RAND() LIMIT 4");
        return $this->db->resultset();
    
    }
   

    // sql untuk melakukan perubahan data pada barang (update)
    public function Ubahbarang($id, $nambar, $harga, $brand, $desc, $kategory, $pic, $stock,$size){
        $this->db->Query("UPDATE barang SET nambar = :nambar, Harga = :harga, Brand = :brand, Descr = :descr, kategory = :kategory, Pic = :pic, Stock = :stock, Size = :ukuran WHERE Id_Barang = :id");
        $this->db->bind('id',$id);
        $this->db->bind('nambar',$nambar);
        $this->db->bind('harga',$harga);
        $this->db->bind('brand',$brand);
        $this->db->bind('descr',$desc);
        $this->db->bind('kategory',$kategory);
        $this->db->bind('pic',$pic);
        $this->db->bind('stock',$stock);
        $this->db->bind('ukuran',$size);
        $this->db->execute();
    }

    // sql untuk menambah barang baru
    public function Tam($nambar, $harga, $brand,$desc,$kategory,$pic,$stock,$size){
        $this->db->Query("INSERT INTO barang(Id_Barang,nambar, Harga, Brand, Descr, kategory, Pic, Stock, Size) VALUES(UUID_SHORT(), :nambar, :harga, :brand, :descr, :kategory, :pic ,:stock, :ukuran) ");
        $this->db->bind('nambar',$nambar);
        $this->db->bind('harga',$harga);
        $this->db->bind('brand',$brand);
        $this->db->bind('descr',$desc);
        $this->db->bind('kategory',$kategory);
        $this->db->bind('pic',$pic);
        $this->db->bind('stock',$stock);
        $this->db->bind('ukuran',$size);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // sql untuk menampilkan gambar dari id barang tertentu
    public function Gambar($id){
        $this->db->Query("SELECT Pic FROM barang WHERE Id_Barang = :id");
        $this->db->bind('id',$id);
        return $this->db->single();
    }
}