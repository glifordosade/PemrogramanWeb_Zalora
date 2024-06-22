
<!-- halaman untuk menampilkan detail dari barang yang dipilih -->
<div class="putih">
    <div class="main">
        <div class="imageshield">
            <img class="picdetail" src="<?= BASEURL;?>/gambar/<?= $data['barang']['Pic'];?>" alt="">
        </div>
        <div class="legendary">
            <div class="brandescr">
                <h1 class="Brandetail"><?= $data['barang']['Brand'];?></h1>
                <p><?= $data['barang']['Descr'];?></p>
            </div>
            <div class="brandescr">
                <h1 class="price">Rp <?= number_format($data['barang']['Harga'],0, ',', '.');?></h1>
                <img class="picdiskon" src="<?= BASEURL;?>/img/diskon.png" alt="">
            </div>
            
                <form action="<?=BASEURL;?>/Bag/cart" method="POST">
                    <div class="brandescr">
                        <h1 class="price">Ukuran</h1>
                        <?php
                            $b = strval($data['barang']['Size']);
                            $arr = explode(",", $b);
                        ?>
                        <select class="ukurandetail" name="size">
                        <?php foreach ($arr as $a) {?>
                            <option value="<?= $a?>"><?= $a?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="brandescr">
                    <!-- menentukan apakah barang telah di masukkan ke keranjang atau belum -->
                    <?php if($data['cekbag']!=1) {?>
                        <button class="linkks" type="submit" name="barang" value="<?= $data['barang']['Id_Barang'];?>">Masukkan ke Tas</button>
                    <?php }else{?>
                        <div class="linkknot" >Masukkan ke Tas</div>
                    <?php }?>

                <!-- menentukan apakah barang telah di masukkan ke wishlist atau belum -->
                    <?php if($data['cekwish']!=1) {?>
                        <a class="logshield" href="<?= BASEURL;?>/Wish/tambWish/<?= $data['barang']['Id_Barang'];?>"><img class="loggo" src="<?= BASEURL;?>/img/wishlist.png" alt=""></a>
                    <?php }else{?>
                        <a class="logshield" href="<?= BASEURL;?>/Wish/hapusdetail/<?= $data['barang']['Id_Barang'];?>"><img class="loggo" src="<?= BASEURL;?>/img/love.png" alt=""></a>
                    <?php }?>
                    </div>
                </form>

            <div class="brandescr">
                <h1 class="price">Mengapa anda akan suka belanja di ZALORA</h1>
                <img style="width: 500px;" class="picdiskon" src="<?= BASEURL;?>/img/ulasan.png" alt="">
            </div>
            <div class="brandescr">
                <h1 class="price">Ulasan & Penilaian</h1>
                <img style="width: 550px;" class="picdiskon" src="<?= BASEURL;?>/img/nilai.png" alt="">
            </div>
        </div>
    </div>
    <div class="main">
        <div class="barang">
            <h3 class="bold fontsize">Rekomendasi untuk Anda</h3>
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