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
                    <ul>
                        <!-- menampilkan daftar barang yang telah diinputkan -->
                    <?php foreach ($data['barang'] as $a) {?>
                        <div class="batang">
                            <li><?= $a['nambar']?></li>
                            <div class="editor">
                                <a class="ngedit" href="<?=BASEURL;?>/Authup/index/<?= $a['Id_Barang']?>" data-iid="<?= $it['Id_Barang'] ?>">Edit</a>
                                <a href="<?=BASEURL;?>/Authread/Hapus/<?= $a['Id_Barang']?>">Hapus</a>
                            </div>
                        </div>
                    <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>