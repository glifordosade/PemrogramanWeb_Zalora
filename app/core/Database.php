<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $query;


    // konstruktor untuk mealkukan koneksi ke database
    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;

        $option=[
            PDO::ATTR_PERSISTENT=>True,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn,$this->user,$this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function Query($sql){
        $this->query=$this->dbh->prepare($sql);

    }


    // membuat fungsi bind untuk dan menyeleksi tipe datanya
    public function Bind($param, $value, $type=null){
        if (is_null($type)) {
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->query->bindValue($param, $value, $type);
    }

    // membuat fungsi untuk eksekusi program sql
    public function execute() {
        $this->query->execute();
    }

    // fungsi untuk mengahsilkan output dari panyak row
    public function resultset(){
        $this->execute();
        return $this->query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // fungsi untuk menghasilkan output dari satu row
    public function single(){
        $this->execute();
        return $this->query->fetch(PDO::FETCH_ASSOC);

    }

    // funsi untuk menghitung jumlah baris yang mempengaruhi database
    public function rowCount(){
        return $this->query->rowCount();
    }
}