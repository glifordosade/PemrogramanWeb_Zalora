<?php

class wishModel{
    private $db;

    public function __construct()
    {
        $this->db=new Database;
    }

    

    public function show($id){
        $query = "SELECT * 
                    FROM 
                        barang 
                    LEFT JOIN
                        wishlistid ON barang.Id_Barang = wishlistid.Id_barang
                    LEFT JOIN 
                        user ON wishlisted.Id_user = user.ID 
                    WHERE user.ID = :id";
        $this->db->Query($query);
        $this->db->Bind('id',$id);
        $this->db->resultset();
    }

    public function rekomendasi($id){
        // $query = "SELECT * FROM barang WHERE ";

    }
    public function rek(){
        $query = "SELECT * FROM barang WHERE Kategory LIKE %baju%";
        $this->db->Query($query);
        return $this->db->resultset();
    }
    public function tambahWish($id){
        // $query = "SELECT * FROM barang WHERE ";

    }

    public function Hapuswish(){

    }

    public function WishtoBag(){

    }
}