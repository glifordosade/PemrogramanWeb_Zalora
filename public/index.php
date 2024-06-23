<?php
// inisialisasi file init.php untuk menjalankan website
session_start();
// melakukan start session



require_once '../app/init.php';

// menjalankan website
$app = new App();

