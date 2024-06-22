<!-- menampilkan halaman wishlist -->
<div class="putih">
    <div class="main">
    <?php if(isset($_SESSION['id'])AND($data['wish']==null)) {?>
        <div class="emptylogoshield">
            <img class="emptylogo" src="<?= BASEURL; ?>/img/wishlistnot.png" alt="">
            <h3 class="bold">Wishlist Anda Kosong</h3>
            <p class="thin">Mulai belanja dan temukan tampilan favorit anda</p>
            <a class="linkk" href="<?= BASEURL;?>">Ayo Belanja</a>
        </div>
        <?php }else{?>
            <?php foreach($data['isiwish'] as $it):?>
                <div class="cardlist">
                    <a class="hapus" href="<?= BASEURL;?>/Wish/hapus/<?= $it['Id_wish'] ?>">X</a>
                    <a class="cardd" href="<?= BASEURL;?>/Main/Detail/<?= $it['Id_Barang'] ?>" >
                        <img class="cardimage" src="<?= BASEURL."/gambar/".$it['Pic']?>" alt="">
                        <div class="hades">
                            <div class="bris">
                                <span class="brand"><?= $it['Brand']?></span>
                                <!-- <button><img class="loggo" src="<?= BASEURL;?>/img/wishlist.png" alt=""></button> -->
                            </div>
                            <h6 class="deskripsi"><?= $it['Descr']?></h6>
                            <h6 class="harga">Rp <?= number_format($it['Harga'],0,",",".");?></h6>
                        </div>
                        
                        <!-- <a href="">Masukkan ke Tas</a> -->
                    </a>
                    <form action="<?=BASEURL;?>/Bag/cart2" method="POST">
                        <?php
                            $b = strval($it['Size']);
                            $arr = explode(",", $b);
                        ?>
                        <select class="ukuranwish" name="size">
                            <option value="">Pilih Ukuran</option>
                        <?php foreach ($arr as $a) {?>
                            <option value="<?= $a?>"><?= $a?></option>
                        <?php } ?>
                        </select>
                        <div>
                            <button class="linkwish" type="submit" name="barang" value="<?= $it['Id_Barang'];?>">Pindahkan ke Tas</button>
                        </div>
                    </form>
                </div>
            <?php endforeach;?>
        <?php }?>
    </div>
    <div class="main">
        <div class="barang">
            <h3 class="bold">Pilihan yang Terinspirasi: Apa yang Mungkin Anda Sukai</h3>
            <?php foreach($data['barang'] as $it):?>
            <a href="<?= BASEURL;?>/Main/Detail/<?= $it['Id_Barang'] ?>" class="cardd">
                <img class="carddis" src="<?= BASEURL."/gambar/".$it['Pic']?>" alt="">
                <div>
                    <div class="bris">
                        <h6 class="brand"><?= $it['Brand']?></h6>
                        <img  src="" alt="">
                    </div>
                    <h6 class="deskripsi"><?= $it['Descr']?></h6>
                    <h6 class="harga">Rp <?= $it['Harga']?></h6>
                </div>
                <!-- <a href="">Masukkan ke Tas</a> -->
            </a>
            <?php endforeach;?>
            
        </div>
    </div>
</div>