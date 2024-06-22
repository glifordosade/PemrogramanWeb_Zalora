<?php

class bagModel{
    private $db;

    public function __construct()
    {
        $this->db =  new Database;
    }

    public function Tambahbag($barang, $user, $ukuran){
        $this->db->Query("INSERT INTO keranjang(Id_Keranjang, Id_barang, Id_user, Size) VALUES(UUID_SHORT(), :barang, :user, :ukuran) ");
        $this->db->bind('barang',$barang);
        $this->db->bind('user',$user);
        $this->db->bind('ukuran',$ukuran);
        $this->db->execute();
    }

    // menampilkan isi dari keranjang
    public function show($id){
        $this->db->Query("SELECT barang.Brand,barang.Descr,barang.Harga,barang.Pic,barang.Id_Barang,keranjang.Id_Keranjang
                                FROM barang LEFT JOIN keranjang 
                                ON barang.Id_Barang = keranjang.Id_barang 
                                WHERE keranjang.Id_user = :id");
        $this->db->Bind('id',$id);
        // $this->db->Bind(':password',$pass);
        return $this->db->resultset();
    }

    public function Hapusbag($idbarang){

    }
}