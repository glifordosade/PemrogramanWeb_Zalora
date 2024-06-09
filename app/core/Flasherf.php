<?php
class Flasherf{

    // fungsi sebagai input untuk menetukan jenis notifikasi pada form 
    public static function setFlashf($pesan, $aksi, $warna){
        $_SESSION['flash']=[
            'pesan'=> $pesan,
            'aksi'=> $aksi,
            'warna'=> $warna,
            
        ];
    }
            
    // fungsi untuk menampikan pesan notifikasi pada form
    public static function flashf(){
        if (isset($_SESSION['flash'])) {
            echo "<div class='notiff' style='Background-color:".$_SESSION['flash']['warna'].";' >"."<strong>".
                     $_SESSION['flash']['pesan']."</strong>".
                "</div>";

            unset($_SESSION['flash']);
        }
    }
}

