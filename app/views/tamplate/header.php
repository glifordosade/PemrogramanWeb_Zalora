
<!-- tampilan header dari halaman utama pencarian -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASEURL;?>/css/reset.css">
  <link rel="stylesheet" href="<?= BASEURL;?>/css/card.css">
  <link rel="stylesheet" href="<?= BASEURL;?>/css/nav.css">
  <link rel="stylesheet" href="<?= BASEURL;?>/css/pelbaru.css">
  <link rel="stylesheet" href="<?= BASEURL;?>/css/footer.css">
  <link rel="stylesheet" href="<?= BASEURL;?>/css/isiakun.css">
  <link rel="stylesheet" href="<?= BASEURL;?>/css/home.css">
  <link rel="stylesheet" href="<?= BASEURL;?>/css/wanita.css">
  <link rel="stylesheet" href="<?= BASEURL;?>/css/cart.css">
  <link rel="icon" type="image/png" href="<?= BASEURL;?>/img/favicon.png">
  <title><?= $data['title'];?></title>
</head>
<body>
  <header class="headd">
    <div class="wrapper">
      <nav class="navv">
          <a id="logo" href="<?= BASEURL;?>">
            <img src="<?= BASEURL;?>/img/logo.svg" alt="ZALORA">
          </a>
          <!-- form untuk melakukan pencarian pada barang -->
        <form action="<?= BASEURL;?>/Main" method="POST" id="searchdiv">
          <input id="search" type="text" placeholder="New Balance Up to 40%" name="pencarian">
          <button id="searchbut" name="search"><img id="searchlog" src="/img/search.png" alt=""></button>
        </form>
        <div id="prof">
          <div id="logouser">
            <a href="<?= BASEURL;?>/akun"><img class="log1o" src="<?= BASEURL;?>/img/user.png" alt="user"></a>
            <span id="usernya">
              <!-- menentukan tampilan menu saat login dan sebelum login -->
              <?php if(isset($_SESSION['user'])!= null):?>
                <!-- tampilan setelah login -->
                <?= "Hi,".$_SESSION['user']; ?>
                <ul class="drop">
                  <img class="log2o" src="<?= BASEURL;?>/img/user.png" alt=""><a href="<?= BASEURL;?>/Account">Rincian<li></li></a>
                  <img class="log2o" src="<?= BASEURL;?>/img/coin.png" alt=""><a href="<?= BASEURL;?>">Cashback<li></li></a>
                  <img class="log2o" src="<?= BASEURL;?>/img/wallet.png" alt=""><a href="<?= BASEURL;?>">Wallet<li></li></a>
                  <img class="log2o" src="<?= BASEURL;?>/img/wishlist.png" alt=""><a href="<?= BASEURL;?>">Wishlist<li></li></a>
                  <img class="log2o" src="<?= BASEURL;?>/img/box.png" alt=""><a href="<?= BASEURL;?>">Pesanan<li></li></a>
                  <img class="log2o" src="<?= BASEURL;?>/img/star.png" alt=""><a href="<?= BASEURL;?>">Ulasan<li></li></a>
                  <img class="log2o" src="<?= BASEURL;?>/img/FAQ.png" alt=""><a href="<?= BASEURL;?>">FAQ<li></li></a>
                  <hr>
                  <img class="log2o" src="<?= BASEURL;?>/img/people.png" alt=""><a href="<?= BASEURL;?>">Program Komunitas Influencer<li></li></a>
                  <hr>
                  <img class="log2o" src="<?= BASEURL;?>/img/out.png" alt=""><a href="<?= BASEURL;?>/Home/logout">Log out<li></li></a>
                </ul>
              <?php else :?>
                <!-- tampilan jika belum melakukan login -->
                <?= 'Daftar/Masuk';?>
                <ul class="drop">
                  <img class="log2o" src="<?= BASEURL;?>/img/out.png" alt=""><a href="<?= BASEURL;?>/Regist/pelma">Masuk/Daftar<li></li></a>
                  <img class="log2o" src="<?= BASEURL;?>/img/box.png" alt=""><a href="<?= BASEURL;?>">Pesanan<li></li></a>
                  <img class="log2o" src="<?= BASEURL;?>/img/FAQ.png" alt=""><a href="<?= BASEURL;?>">FAQ<li></li></a>
                </ul>
              <?php endif?>
            </span>
          </div>

          <a href="<?= BASEURL;?>/Wish/index/<?php if(isset($_SESSION['id'])!=null){ echo $_SESSION['id'];}?>"><img class="log1o" src="<?= BASEURL;?>/img/wishlist.png" alt="wishlist"></a>
          <span id="bag">
            <a href="<?= BASEURL;?>/Bag"><img class="log1o" src="<?= BASEURL;?>/img/bag.png" alt="bag"></a>
                <div id="isitas">
                  <div id="padpad">
                    <img id="loggg" src="<?= BASEURL;?>/img/bagg.png" alt="">
                    <h3 id="bold">Your Bag is empt</h3>
                    <p id="thin">Start filling it up with yout favourites</p>
                    <a id="linkk" href="">See What`s New</a>
                  </div>
                </div>
          </span>
          <ul>
            
          </ul>
        </div>
      </nav>
      <ul id="kategory">
        <li><a href="<?php BASEURL;?>/Wanita">Wanita</a></li>
        <li><a href="<?php BASEURL;?>/Pria">Pria</a></li>
        <li><a href="<?php BASEURL;?>/Sport">Sport</a></li>
        <li><a href="<?php BASEURL;?>/Anak">Anak</a></li>
        <li><a href="<?php BASEURL;?>/Luxury">Luxury</a></li>
        <li><a href="<?php BASEURL;?>/Beauty">Beauty</a></li>
        <li><a href="<?php BASEURL;?>/Livestyle">Home&Livestyle</a></li>
      </ul>
    </div>
  </header>
  <div id="filler"></div>
    