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
                    <form action="<?= BASEURL;?>/Ubahdatakun/Datauser" enctype="multipart/form-data" method="POST">

                        <!-- form kosong -->
                        <input type="text" name="id" value="<?= $_SESSION['id']?>" style="display: none;">
                        <input type="text" name="email" value="<?= $data['userdat']['Email']?>" style="display: none;">
                        <input type="text" name="alamat" value="<?= $data['userdat']['Alamat']?>" style="display: none;">
                        <input type="text" name="phone" value="<?= $data['userdat']['Telephone']?>" style="display: none;">
                        <input type="text" name="pos" value="<?= $data['userdat']['KodePos']?>" style="display: none;">
                        <input type="text" name="pass" value="<?= $data['userdat']['Password']?>" style="display: none;">

                        <!-- form kosong -->



                        <label class="bold">Email</label><br><br>
                        <h2 class="bold"><?= $data['userdat']['Email']?></h2>
                        
                        <label for="">Gender</label>
                        <select class="alepapan" name="gender"  require>
                            <option value="<?= $data['userdat']['Gender']?>"><?= $data['userdat']['Gender']?></option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select><br><br>
                        <label for="">Nama Depan</label>
                        <input class="alepapan" type="text" name="fname" value="<?= $data['userdat']['FirstName']?>" placeholder="Masukkan Nama Depan" require><br><br>
                        <label for="">Nama Belakang</label>
                        <input class="alepapan" type="text" name="lname" value="<?= $data['userdat']['LastName']?>" placeholder="Masukkan Nama Belakang" require><br><br><br>
                        <label for="">Tanggal Lahir</label>
                        <input class="alepapan" type="date" name="ttl" value="<?= $data['userdat']['TanggalLahir']?>" placeholder="Masukkan Nama Belakang" require><br><br><br>

                        <input class="tombol" type="submit" name="submit">
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>