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
                    <hr>


                    <form class="alamat" action="<?= BASEURL; ?>/Ubahdatakun/alamat" method="POST">

                        <!-- kosong -->
                        <input type="text" name="id" value="<?= $_SESSION['id']?>" style="display: none;">
                        <input type="text" name="email" value="<?= $data['userdat']['Email']?>" style="display: none;">
                        <input type="text" name="pass" value="<?= $data['userdat']['Password']?>" style="display: none;">
                        <input type="date" name="ttl" value="<?= $data['userdat']['TanggalLahir']?>" style="display: none;">
                        <!-- kosong -->
                        
                        
                        <label for="">Nama Depan</label>
                        <input class="alepapan" type="text" name="fname" value="<?= $data['userdat']['FirstName']?>" placeholder="Nama Depan">
                        
                        <label for="">Nama Belakang</label>
                        <input class="alepapan" type="text" name="lname" value="<?= $data['userdat']['LastName']?>" placeholder="Nama Belakang"><br>
                        
                        <label for="">Gender</label><br>
                        <select class="alepapan" name="gender" id="">
                            <option value="<?= $data['userdat']['Gender']?>"><?= $data['userdat']['Gender']?></option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select><br><br>

                        <label for="">Nomor Handphone</label>
                        <input class="alepapan" type="number" name="phone" value="<?= $data['userdat']['Telephone']?>" placeholder="Nomer Hanphone">
                        
                        <label for="">Alamat</label><br>
                        <textarea class="alepapan" rows="6" style="resize: none;" name="alamat" placeholder="Masukkan Alamat Anda"><?= $data['userdat']['Alamat']?></textarea>

                        <label for="">Kode Pos</label>
                        <input  class="alepapan" type="number"name="pos" value="<?= $data['userdat']['KodePos']?>" placeholder="Kode Pos"><br><br>
                        <input class="tombol" type="submit">
                            <a class="tombol" href="<?= BASEURL;?>/Account">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br>
