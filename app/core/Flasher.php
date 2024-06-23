<?php
class Flasher{
    public static function setFlash($pesan, $aksi, $warna){
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'warna' => $warna,

        ];
    }

    public static function Flash(){
        if(isset($_SESSION['flash'])){
            echo "<div class='bodysize ".$_SESSION['flash']['warna']."'>".$_SESSION['flash']['pesan']." ".$_SESSION['flash']['aksi']."</div>";
            unset($_SESSION['flash']);
        }
    }


}

?>