<br>

<!-- memilih apakah yang logi admin atau user umum -->
<?php if(isset($_SESSION['user'])&&($_SESSION['user']=='Adminnich')){ ?>
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
            <a class="akunsel" href="<?= BASEURL;?>/Authread">
                <li>Barang</li>
            </a>
            <a class="akunsel" href="<?= BASEURL;?>/Authin">
                <li>Tambah Barang</li>
            </a>
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
                            <p><?= $_SESSION['user'];?></p>
                            <p><?= $_SESSION['email'];?></p>
                            <p><?= $_SESSION['ttl'];?></p>
                            <p><?= $_SESSION['pass'];?> <a id="ganti" href="<?= BASEURL;?>/Ganpass">GANTI PASSWORD</a></p>
                        </div>
                        <div class="bio1">
                            <a href="<?=BASEURL;?>/">UBAH</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blockisi">
            <div class="blokket">
                <h1>Alamat Penagihan/Alamat Pengiriman</h1>
                <div id="masukdikit">
                    <hr>
                    <form action="">
                        <select class="alepapan" name="" id="" placeholder="P">
                            <option value=""></option>
                            <option value="Home">Home</option>
                            <option value="Office">Office</option>
                        </select><br>
                        <input class="alepapan" type="text" placeholder="Nama Depan">
                        <input class="alepapan" type="text" placeholder="Nama Belakang"><br>
                        <input class="alepapan" type="text" placeholder="No Hp">
                        <input class="alepapan" type="text" placeholder="Nomor Lainnya"><br>
                        <input class="alepapan" type="text" placeholder="Alamat"><br>
                        <select class="alepapan"  name="" id=""></select>
                        <select class="alepapan"  name="" id=""></select><br>
                        <select class="alepapan"  name="" id=""></select><br>
                        <input  class="alepapan" type="text" placeholder="Rute Tercepat Ke Lokasi"><br>
                        <input  class="alepapan" type="text" placeholder="Kode Pos">
                        <input class="tombol" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }else{?>
    <!-- tapilan jika yang login merupakan user biasa -->
    <div class="isiakun">
        <div class="user">
            <div id="setdiv">AKUN SAYA</div>
            <ul>
                <a class="akunsel" href="#">
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
                <a class="akunsel" href="#">
                    <li>Ulasan Saya</li>
                </a>
                <a class="akunsel" href="#">
                    <li>Konfirmasi Transfer</li>
                </a>
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
                                <!-- menampilkan biodata user -->
                                <p><?= $_SESSION['user'];?></p>
                                <p><?= $_SESSION['email'];?></p>
                                <p><?= $_SESSION['ttl'];?></p>
                                <p><?= $_SESSION['pass'];?> <a id="ganti" href="<?=BASEURL;?>/Ganpass">GANTI PASSWORD</a></p>
                            </div>
                            <div id="bio1">
                                <a href="<?=BASEURL;?>/Ubahdatakun">UBAH</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blockisi">
                <div class="blokket">
                    <h1>Alamat Penagihan/Alamat Pengiriman</h1>
                    <div id="masukdikit">
                        <hr>
                        <form action="">
                            <select class="alepapan" name="" id="">
                                <option value=""></option>
                                <option value="Home">Home</option>
                                <option value="Office">Office</option>
                            </select><br>
                            <input class="alepapan" type="text" placeholder="Nama Depan">
                            <input class="alepapan" type="text" placeholder="Nama Belakang"><br>
                            <input class="alepapan" type="text" placeholder="No Hp">
                            <input class="alepapan" type="text" placeholder="Nomor Lainnya"><br>
                            <input class="alepapan" type="text" placeholder="Alamat"><br>
                            <select name="" id=""></select>
                            <select name="" id=""></select><br>
                            <select name="" id=""></select><br>
                            <input type="text" placeholder="Rute Tercepat Ke Lokasi"><br>
                            <input type="text" placeholder="Kode Pos">
                            <input class="tombol" type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>