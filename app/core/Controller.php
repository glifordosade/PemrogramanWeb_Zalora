<?php

class Controller{

    // membuat fungsi untuk membentuk url yang dapat mengirimkan data dan menapilkan halaman(untuk mengatur halaman yang akan ditampilkan dan mengirim data)
    public function view($view, $data=[],$dat=[]){
        require_once '../app/views/'.$view.'.php';
    }
    
    // membuat fungsi untuk menentukan model yang akan menentukan program sql yang akan digunakan
    public function model($model){
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }
}