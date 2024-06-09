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

    public function login($email, $pass)
    {
        $this->db->Query("SELECT * FROM user WHERE Email = :email AND Password= :password");
        $this->db->Bind(':email',$email);
        $this->db->Bind(':password',$pass);
        return $this->db->resultset();
    }

}