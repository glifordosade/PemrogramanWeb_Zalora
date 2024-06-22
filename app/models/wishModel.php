<?php

class wishModel{
    private $db;

    public function __construct()
    {
        $this->db=new Database;
    }

    

    public function TambahWish($barang, $user){
        $this->db->Query("INSERT INTO wishlistid(Id_wish, Id_barang, Id_user) VALUES(UUID_SHORT(), :barang, :user) ");
        $this->db->bind('barang',$barang);
        $this->db->bind('user',$user);
        $this->db->execute();
    }

    // menampilkan isi dari keranjang
    public function show($id){
        $this->db->Query("SELECT barang.Brand,barang.Descr,barang.Harga,barang.Pic,barang.Size,barang.Id_Barang,wishlistid.Id_wish
                                FROM barang LEFT JOIN wishlistid 
                                ON barang.Id_Barang = wishlistid.Id_barang 
                                WHERE wishlistid.Id_user = :id");
        $this->db->Bind('id',$id);
        // $this->db->Bind(':password',$pass);
        return $this->db->resultset();
    }

    // mengahapus barang dari daftar wishlist
    public function Hapus($ID){
        $this->db->Query("DELETE FROM wishlistid WHERE Id_wish=:id");
        $this->db->bind('id',$ID);
        return $this->db->single();
    }

    // mengahapus barang dari daftar wishlist berdasarkan id barang dan id user
    public function Hapus2($ID,$user){
        $this->db->Query("DELETE FROM wishlistid WHERE Id_Barang=:id AND Id_user=:user");
        $this->db->bind('id',$ID);
        $this->db->bind('user',$user);
        return $this->db->single();
    }

}
