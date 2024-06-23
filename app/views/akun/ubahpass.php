<!-- menampilkan notifikasi jika dari kontroller mengirimkan triger notifikasi -->
<div class="isiakun">
    <div class="user">
        <div id="setdiv">ADMIN</div>
        <ul>
            <a class="akunsel" href="<?= BASEURL;?>/Account">
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
            <a class="akunsel" id="aktif" href="<?= BASEURL;?>/Authread">
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
                <h1>Daftar Barang</h1>
                <div id="masukdikit">
                    <form action="<?= BASEURL;?>/Ubahdatakun/Pass" enctype="multipart/form-data" method="POST">

                        <!-- form kosong -->
                        <input type="text" name="id" value="<?= $_SESSION['id']?>" style="display: none;">
                        <input type="text" name="email" value="<?= $data['userdat']['Email'] ?>" style="display: none;">
                        <input type="text" name="fname" value="<?= $data['userdat']['FirstName']?>" style="display: none;">
                        <input type="text" name="lname" value="<?= $data['userdat']['LastName']?>" style="display: none;">
                        <input type="text" name="gender" value="<?= $data['userdat']['Gender']?>" style="display: none;">
                        <input type="text" name="phone" value="<?= $data['userdat']['Telephone']?>" style="display: none;">
                        <input type="text" name="ttl" value="<?= $data['userdat']['TanggalLahir']?>" style="display: none;">
                        <input type="text" name="alamat" value="<?= $data['userdat']['Alamat']?>" style="display: none;">
                        <input type="text" name="pos" value="<?= $data['userdat']['KodePos']?>" style="display: none;">

                        <!-- form kosong -->

                        <label for="">Password Lama</label>
                        <input class="alepapan" type="password" name="passlama" placeholder="Pasword Lama" require><br>
                        <label for="">Passsword Baru</label>
                        <input class="alepapan" type="password" name="pass1" placeholder="Password Baru" require><br>
                        <label for="">Confirm Password Baru</label>
                        <input class="alepapan" type="password" name="pass2" placeholder="Confirm Password Baru" require><br><br><br>

                        <input class="tombol" type="submit" name="submit">
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>