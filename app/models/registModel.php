<?php
class registModel{
    private $db; 
    public function __construct()
    {
        $this->db= new Database;
    }

    // sql untuk melakukan registrasi pada user yang belum memiliki akun
    public function regist($nama, $email, $pass, $gender, $ttl){
        $query="INSERT INTO user(ID, Email, FirstName, Password, Gender, TanggalLahir) VALUES(UUID_SHORT(),:email,:username,:password, :gender,:TanggalLahir)";
        $this->db->Query($query);
        $this->db->Bind('email',$email);
        $this->db->Bind('username',$nama);
        $this->db->Bind('password',$pass);
        $this->db->Bind('gender',$gender);
        $this->db->Bind('TanggalLahir',$ttl);

        $this->db->execute();

        return $this->db->rowCount();
    }

}



