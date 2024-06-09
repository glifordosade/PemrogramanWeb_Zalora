<?php
class Flasher{

    // fungsi sebagai input untuk menentukan jenis notifikasi mengambang
    public static function setFlash($pesan, $aksi, $warna){
        $_SESSION['flash']=[
            'pesan'=> $pesan,
            'aksi'=> $aksi,
            'warna'=> $warna,
            
        ];
    }


    // fungsi untuk menghasilkan output notifikasi mengambang
    public static function flash(){
        if (isset($_SESSION['flash'])) {
            echo "<div class='notif' style='Background-color:".$_SESSION['flash']['warna'].";' >"."<strong>".
                     $_SESSION['flash']['pesan']."</strong>".
                "</div>";

            unset($_SESSION['flash']);
        }
    }
}

