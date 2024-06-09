
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
            <a class="akunsel" id="aktif" href="<?= BASEURL;?>/Authin">
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
    <!-- bagian untuk menampilkan form untuk melakukan input data barang baru -->
    <div id="zz">
        <div class="blockisi">
            <div class="blokket">
                <h1>Tambahkan Barang</h1>
                <div id="masukdikit">
                    <form action="<?= BASEURL;?>/Authin/Tambah" enctype="multipart/form-data" method="POST">
                        <label for="">Nama Barang</label>
                        <input class="alepapan" type="text" name="nambar" placeholder="Nama Barang" require><br><br>
                        <label for="">Harga</label>
                        <input class="alepapan" type="number" name="harga" placeholder="Harga" require><br><br>
                        <label for="">Brand</label>
                        <input class="alepapan" type="text" name="brand" placeholder="Brand" require><br><br>
                        <label for="">Deskripsi Barang</label>
                        <textarea class="alepapan" name="Desc" placeholder="Deskripsi Barang" require></textarea><br><br>
                        <label for="">Kategory</label>
                        <textarea class="alepapan" name="kategory" placeholder="Kategory barang" require></textarea><br><br>
                        <label for="">Gambar</label>
                        <input class="tombol" type="file" name="pic" accept="image/*" require><br>
                        <label for="">Nama Barang</label>
                        <input class="alepapan" type="number" name="stock" placeholder="Stock Barang" require><br><br>
                        <input class="tombol" type="submit" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>