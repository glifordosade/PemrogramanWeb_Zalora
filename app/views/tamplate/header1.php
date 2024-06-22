<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/reset.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/footer.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/isiakun.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/pelbaru.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/nav1.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/auth.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/notif.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="icon" type="image/png" href="<?= BASEURL;?>/img/favicon.png">
    <title><?= $data['title'];?></title>
</head>
<body>
    <header class="kepala">
        <nav class="navnya">
            <a href="<?= BASEURL;?>">
                <img id="mainlog" src="<?= BASEURL;?>/img/logo1.svg" alt="">
            </a>
            <ul id="daftar">
                <li><a href="">Wanita</a></li>
                <li><a href="">Pria</a></li>
                <li><a href="">Sport</a></li>
                <li><a href="">Anak</a></li>
                <li><a href="">Luxury</a></li>
                <li><a href="">Beauty</a></li>
                <li><a href="">Home & Livestyle</a></li>
            </ul>
            <!-- form untuk melakukan pencarian pada barang -->
            <form action="<?= BASEURL;?>/Main" method="POST" id="searchdiv">
                <input id="search" type="text" placeholder="New Balance Up to 40%" name="cari">
                <button id="searchbut" name="search"><img id="searchlog" src="/img/search1.png" alt=""></button>
            </form>
            <div class="set">
                <span id="userpil">
                    <a href="<?= BASEURL;?>"><img class="log1o" src="<?= BASEURL;?>/img/userput.svg" alt="wishlist"></a>
                    <!-- menentukan tampilan menu saat login dan sebelum login -->
                    <?php if(isset($_SESSION['user'])!=null):?>
                    <!-- tampilan setelah login -->
                    <ul class="drop">
                      <div id="name">SELAMAT DATANG, <?= strtoupper($_SESSION['user']);?></div>
                      <div id="pad">
                          <a href="<?= BASEURL;?>/Account">Rincian</a>
                          <a href="<?= BASEURL;?>">Cashback</a>
                          <a href="<?= BASEURL;?>">Wallet</a>
                          <a href="<?= BASEURL;?>">Wishlist</a>
                          <a href="<?= BASEURL;?>">Pesanan</a>
                          <a href="<?= BASEURL;?>">Ulasan</a>
                          <a href="<?= BASEURL;?>">FAQ</a>
                          <hr>
                          <a href="<?= BASEURL;?>">Program Komunitas Influencer<li></li></a>
                          <hr>
                          <a href="<?= BASEURL;?>/Home/logout">Log out<li></li></a>
                      </div>
                    </ul>
                    <?php else :?>
                    <!-- tampilan jika belum melakukan login -->
                    <ul class="drop">
                      <div id="name">SELAMAT DATANG!</div>
                      <div id="pad">
                          <a href="<?= BASEURL;?>/Regist/pelma">Masuk</a>
                          <a href="<?= BASEURL;?>/Regist/pelbaru">Buat Akun</a>
                          <a href="<?= BASEURL;?>">Lihat Status Pesanan</a>
                          <a href="<?= BASEURL;?>">Konfirmasi Transfer</a>
                          <a href="<?= BASEURL;?>">Bantuan</a>
                          <hr>
                          <a href="<?= BASEURL;?>">Program Komunitas Influencer<li></li></a>
                      </div>
                    </ul><?php endif?>
                    </span>
                <a href="<?= BASEURL;?>/Wish"><img class="log1o" src="<?= BASEURL;?>/img/wishput.svg" alt="wishlist"></a>
                <a href="<?= BASEURL;?>/Bag"><img class="log1o" src="<?= BASEURL;?>/img/bagput.svg" alt="bag"></a>
            </div>
        </nav>
    </header>
    <div id="filler"></div>
    <div><img id="ik" src="<?= BASEURL;?>/img/nav.png" alt=""></div>