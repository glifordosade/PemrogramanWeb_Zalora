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

    public function Gambar($id){
        $this->db->Query("SELECT Pic FROM barang WHERE Id_Barang = :id");
        $this->db->bind('id',$id);
        return $this->db->single();
    }
}