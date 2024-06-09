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

    public function Hapus($ID){
        $this->db->Query("DELETE FROM barang WHERE Id_Barang=:id");
        $this->db->bind('id',$ID);
        return $this->db->single();
    }

    public function PerId($ID){
        $this->db->Query("SELECT * FROM barang WHERE Id_Barang=:id");
        $this->db->bind('id',$ID);
        return $this->db->single();
    }

    public function Ubahbarang($id, $nambar, $harga, $brand, $desc, $kategory, $pic, $stock){
        $this->db->Query("UPDATE barang SET nambar = :nambar, Harga = :harga, Brand = :brand, Descr = :descr, kategory = :kategory, Pic = :pic, Stock = :stock WHERE Id_Barang = :id");
        $this->db->bind('id',$id);
        $this->db->bind('nambar',$nambar);
        $this->db->bind('harga',$harga);
        $this->db->bind('brand',$brand);
        $this->db->bind('descr',$desc);
        $this->db->bind('kategory',$kategory);
        $this->db->bind('pic',$pic);
        $this->db->bind('stock',$stock);
        $this->db->execute();
    }


    public function Tam($nambar, $harga, $brand,$desc,$kategory,$pic,$stock){
        $this->db->Query("INSERT INTO barang(Id_Barang,nambar, Harga, Brand, Descr, kategory, Pic, Stock) VALUES(UUID_SHORT(), :nambar, :harga, :brand, :descr, :kategory, :pic ,:stock) ");
        $this->db->bind('nambar',$nambar);
        $this->db->bind('harga',$harga);
        $this->db->bind('brand',$brand);
        $this->db->bind('descr',$desc);
        $this->db->bind('kategory',$kategory);
        $this->db->bind('pic',$pic);
        $this->db->bind('stock',$stock);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function Gambar($id){
        $this->db->Query("SELECT Pic FROM barang WHERE Id_Barang = :id");
        $this->db->bind('id',$id);
        return $this->db->single();
    }
}