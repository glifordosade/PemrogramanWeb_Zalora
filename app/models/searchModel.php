<?php

class searchModel{
    private $db;

    public function __construct()
    {
        $this->db =  new Database;
    }

    public function search($kunci){
        $query = "SELECT * FROM barang WHERE (kategory LIKE :kunci) OR (nambar LIKE :kunci) OR (Brand LIKE :kunci) OR (Descr LIKE :kunci)";
        $this->db->Query($query);
        $this->db->Bind('kunci',"%$kunci%");
        $this->db->execute();
        return $this->db->resultset();
    }

    public function Hapusbag(){

    }
}