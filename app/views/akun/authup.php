<!-- menampilkan notifikasi jika dari kontroller mengirimkan triger notifikasi -->
<?php Flasher::flash(); ?>
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
    <!-- menampilkan form untuk melakukan update pada data barang -->
    <div id="zz">
        <div class="blockisi">
            <div class="blokket">
                <h1>Edit Data <?= $data['nambar']['nambar']; ?></h1>
                <div id="masukdikit">
                    <form action="<?= BASEURL;?>/Authup/Edit" enctype="multipart/form-data" method="POST">
                        <label for="">Nama Barang</label>
                        <input class="alepapan" type="text" name="nambar" value="<?=$data['nambar']['nambar'];?>" placeholder="Nama Barang" require><br><br>
                        <label for="">Harga</label>
                        <input class="alepapan" type="number" name="harga" value="<?=$data['nambar']['Harga']; ?>" placeholder="Harga" require><br><br>
                        <label for="">Brand</label>
                        <input class="alepapan" type="text" name="brand" value="<?=$data['nambar']['Brand']; ?>" placeholder="Brand" require><br><br>
                        <label for="">Deskripsi Barang</label>
                        <textarea class="alepapan" name="Desc" placeholder="Deskripsi Barang" require><?=$data['nambar']['Descr']; ?></textarea><br><br>
                        <label for="">Kategory</label>
                        <textarea class="alepapan" name="kategory" placeholder="Kategory barang" require><?=$data['nambar']['kategory']; ?></textarea><br><br>
                        <label for="">Gambar</label><br>
                        <img class="gambarKecil" src="<?= BASEURL."/gambar/".$data['nambar']['Pic'];?>" alt=""><br>
                        <input class="tombol" type="file" name="pic" accept="image/*" require><br>
                        <label for="">Stock</label>
                        <input class="alepapan" type="number" name="stock" value="<?=$data['nambar']['Stock'];?>" placeholder="Stock Barang" require><br><br>

                        <!-- nilai kosong -->
                        <input style="display: none;" type="text" name="idbar" value="<?=$data['nambar']['Id_Barang']; ?>">
                        <input style="display: none;" type="text" name="pic" value="<?=$data['nambar']['Pic'];?>"><br>
                        <!-- end nilai kosong -->

                        <input class="tombol" type="submit" name="subsub">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>