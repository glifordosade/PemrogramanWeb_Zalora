<div class="putih">
    <div class="main">
        <?php if(!isset($_SESSION['id'])) {?>
        <div class="emptylogoshield">
            <img class="emptylogo" src="<?= BASEURL; ?>/img/wishlistnot.png" alt="">
            <h3 class="bold">Tas Anda Kosong</h3>
            <p class="thin">Ayo penuhi dengan barang-barang favorit anda</p>
            <a class="linkk" href="<?= BASEURL;?>">Ayo Belanja</a>
        </div>
        <?php }else if($data['isibag']==null) {?>
        <div class="emptylogoshield">
            <img class="emptylogo" src="<?= BASEURL; ?>/img/wishlistnot.png" alt="">
            <h3 class="bold">Tas Anda Kosong</h3>
            <p class="thin">Ayo penuhi dengan barang-barang favorit anda</p>
            <a class="linkk" href="<?= BASEURL;?>">Ayo Belanja</a>
        </div>
        <?php }else{ ?>
            <div class="imageshield">
                <h2 class="bold2">Barang</h2><br>
                <?php foreach($data['isibag'] as $it){?>
                    <div class="itembag">
                        <a class="hapus" href="<?= BASEURL;?>/Bag/Hapus/<?= $it['Id_Keranjang'] ?>">X</a>
                        <div class="bags">
                            <a class="linkgambar" href="<?= BASEURL;?>/Main/Detail/<?= $it['Id_Barang'] ?>"><img class="imagebag" src="<?= BASEURL;?>/gambar/<?= $it['Pic'] ?>" alt=""></a>
                            <div class="bags1">
                                <h2><?= $it['Brand'] ?></h2>
                                <p style="color: gray; padding-top: 10px;"><?= $it['Descr'] ?></p>
                                <p style="color: gray; padding-top: 10px;">Pengiriman pada: <span style="color: green;">25 - 27 Jun</span></p>
                                <div class="set">
                                    <p style="color: gray; padding-top: 10px;">Ukuran: <?= $it['Size'] ?></p><br>
                                    <label for="">Jumlah</label>
                                    <input class="sizebag" type="number" min="1" max="<?= $it['Stock'] ;?>" name="jumlah" placeholder="jumlah">
                                    <span class="hargabag">Rp <?= number_format($it['Harga'],0, ',', '.');?></span>
                                </div>
                                <div class="voucher">
                                    Voucher Diskon Bulanan 20%
                                </div>
                            </div>
                        </div>

                    </div>
                <?php }?>
            </div>
            <?php
                $totalHarga = 0;
                foreach($data['isibag'] as $a){
                    $totalHarga += $a['Harga'];
                }
            ?>

            <div class="legendary">
                <h2 class="bold2">Jumlah Pesanan</h2><br>
                <div class="hitungan">
                    <br>
                    <div class="discount">
                        <span>Subtotal</span>
                        <span>Rp <?= number_format($totalHarga,0, ',', '.');?></span>
                    </div>
                    <hr>
                    <div>
                        <h2>Jumlah Diskon</h2>
                        <div class="discount">
                            <span class="aa">1 voucher digunakan ></span><span class="aa">-Rp 10.000</span>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h2>Pengiriman</h2>
                        <div class="discount">
                            <span class="aa">J$T Express</span><span class="aa">Rp 30.000</span>
                        </div>
                    </div>
                    <br>
                    <?php
                        $totalHarga -= 10000;
                        $totalHarga += 30000;
                    ?>
                    <div>
                        <hr>
                        <div class="discount">
                            <span class="bold">Total</span><span class="bold">Rp <?= number_format($totalHarga,0, ',', '.');?></span>
                        </div>
                    </div>
                    <a class="linkk" href="">Lanjutkan Ke Pembayaran</a>
                </div>
            </div>
        <?php } ?>
    </div><br><br>
    <div class="bold fontsize">Temuan Teratas & Penawaran Menarik dalam Kategori Anda</div>
    <div class="main1 gray">
        <?php foreach($data['rek'] as $ss):?>
                <div class="cardlist">
                    <a class="cardd" href="<?= BASEURL;?>/Main/Detail/<?= $ss['Id_Barang'] ?>" >
                        <img class="cardimage" src="<?= BASEURL."/gambar/".$ss['Pic']?>" alt="">
                        <div class="hades">
                            <div class="bris">
                                <span class="brand"><?= $ss['Brand']?></span>
                                <!-- <button><img class="loggo" src="<?= BASEURL;?>/img/wishlist.png" alt=""></button> -->
                            </div>
                            <h6 class="deskripsi"><?= $ss['Descr']?></h6>
                            <h6 class="harga">Rp <?= number_format($ss['Harga'],0,",",".");?></h6>
                        </div>
                    </a>
                </div>
            <?php endforeach;?>
    </div><br><br>
</div>