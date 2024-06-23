<?php

class userModel{
    // private $table = 'user';
    private $db; 
    // private $query; // untuk meletakkan query

    public function __construct()
    {
        $this->db= new Database;
    }

    public function getUser(){
        $this->db->Query('SELECT username FROM user');
        return $this->db->single();
    }

    // mengambil semua data user
    public function Alldata($id){
        $this->db->Query('SELECT * FROM user WHERE ID = :id');
        $this->db->Bind('id',$id);
        return $this->db->single();
    }

    public function login($email, $pass)
    {
        $this->db->Query("SELECT * FROM user WHERE Email = :email AND Password= :password");
        $this->db->Bind(':email',$email);
        $this->db->Bind(':password',$pass);
        return $this->db->resultset();
    }

    // mengambil password dari database untuk update password
    public function cekPass($id, $pass){
        $this->db->Query("SELECT * FROM user WHERE ID = :id AND Password = :pass");
        $this->db->Bind('id',$id);
        $this->db->Bind('pass',$pass);
        $this->db->single();
        return $this->db->rowCount();
    }

    public function updateUser($id,$email,$fname,$lname,$pass,$gender,$phone,$ttl,$Alamat,$pos){
        $this->db->Query("UPDATE user SET Email = :email, FirstName = :fname, LastName = :lname, Password = :pass, Gender = :gender, Telephone = :phone, TanggalLahir = :ttl, Alamat = :alamat, KodePos = :pos WHERE ID = :id");
        $this->db->Bind('id',$id);
        $this->db->Bind('email',$email);
        $this->db->Bind('fname',$fname);
        $this->db->Bind('lname',$lname);
        $this->db->Bind('pass',$pass);
        $this->db->Bind('gender',$gender);
        $this->db->Bind('phone',$phone);
        $this->db->Bind('ttl',$ttl);
        $this->db->Bind('alamat',$Alamat);
        $this->db->Bind('pos',$pos);
        $this->db->single();
        return $this->db->rowCount();

    }

}