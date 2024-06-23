<br>

<!-- memilih apakah yang logi admin atau user umum -->

    <!-- tampilan jika yang logi merupakan admin -->
<div class="isiakun">
    <div class="user">
        <div id="setdiv">ADMIN</div>
        <ul>
            <a class="akunsel" id="aktif" href="<?= BASEURL;?>/Account">
                <li>Akun Saya</li>
            </a>
            <a class="akunsel" href="#">
                <li>Wallet</li>
            </a>
            <a class="akunsel" href="#">
                <li>Cashback</li>
            </a>
            <a class="akunsel" href="#">
                <li>ZALORA VIP Saya</li>
            </a>
            <a class="akunsel" href="#">
                <li>Lacak Pesanan</li>
            </a>
            <a class="akunsel" href="#">
                <li>Penukaran & Pengembalian</li>
            </a>
            <a class="akunsel" href="#">
                <li>Konfigurasi Gopay</li>
            </a>
            <?php if(isset($_SESSION['user'])&&($_SESSION['email']=='adminmin@gmail.com')){ ?>
                <a class="akunsel" href="<?= BASEURL;?>/Authread">
                    <li>Barang</li>
                </a>
                <a class="akunsel" href="<?= BASEURL;?>/Authin">
                    <li>Tambah Barang</li>
                </a>
            <?php }else{?>
                <a class="akunsel" href="<?= BASEURL;?>/Account">
                <li>ulasan saya</li>
                </a>
                <a class="akunsel" href="<?= BASEURL;?>/Account">
                    <li>Konfirmasi Transfer</li>
                </a>
            <?php }?>
            <a class="akunsel" href="#">
                <li>Preferensi Email</li>
            </a>
            <a class="akunsel" href="#">
                <li>Wishlist</li>
            </a>
        </ul>
    </div>
    <div id="zz">
        <div class="blockisi">
            <div class="blokket">
                <h1>Informasi Kontak</h1>
                <div id="ul">
                    <div class="bio">
                        <p>Nama:</p>
                        <p>E-mail:</p>
                        <p>Tanggal Lahir:</p>
                        <p>Password:</p>
                    </div>
                    <div id="ul2">
                        <div class="bio">
                            <!-- menampilkan biodata admin -->
                            <p><?= $data['userdat']['FirstName'];?></p>
                            <p><?= $data['userdat']['Email'];?></p>
                            <p><?= $data['userdat']['TanggalLahir'];?></p>
                            <p><?= $_SESSION['pass'];?> <a id="ganti" href="<?= BASEURL;?>/Ubahdatakun">GANTI PASSWORD</a></p>
                        </div>
                        <div class="bio1">
                            <a href="<?=BASEURL;?>/Ubahdatakun/Data">UBAH</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blockisi">
            <div class="blokket">
                <h1>Alamat Penagihan/Alamat Pengiriman</h1>
                <div id="masukdikit">
                    <div class="addresss">
                        <div class="alamat">
                            <h2 class="bold fontsize">ALAMAT</h2>
                            <p class="texks"><?= $data['userdat']['FirstName']." ".$data['userdat']['LastName'].", ".$data['userdat']['Telephone'] ?></p>
                            <p class="texks"><?= $data['userdat']['Alamat'].", ".$data['userdat']['KodePos'] ?></p>
                        </div>
                        <div class="bio1">
                            <a href="<?=BASEURL;?>/Account/account1">UBAH</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>
