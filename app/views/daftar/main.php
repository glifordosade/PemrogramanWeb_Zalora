<div class="putih">
    <div class="main">
        <!-- dfgsdfg -->
    </div>
    <div class="main">
        <div class="filterside">
            <div class="filterdiv">
                <p>Brand</p>
                
            </div>
            <div class="filterdiv">
                <p>Kategory</p>
                
            </div>
            <div class="filterdiv">
                <p>Harga</p>
                
            </div>
            <div class="filterdiv">
                <p>Rating</p>
                
            </div>
            <div class="filterdiv">
                <p>Vouchers</p>
                
            </div>
            <div class="filterdiv">
                <p>Warna</p>
                
            </div>
            <div class="filterdiv">
                <p>Acara</p>
                
            </div>
            <div class="filterdiv">
                <p>Diskon</p>
                
            </div>
            <div class="filterdiv">
                <p>Bahan</p>
                
            </div>
            <div class="filterdiv">
                <p>Kondisi</p>
                
            </div>
            <div class="filterdiv">
                <p>Corak</p>
                
            </div>
            <div class="filterdiv">
                <p>Tipe</p>
                
            </div>
            <div class="filterdiv">
                <p>Earth Edit</p>
                 
            </div>
            <div class="filterdiv">
                <p>Toko</p>
                
            </div>
            <div class="filterdiv">
                <p>ZVIP</p>
                
            </div>
            <div class="filterdiv">
                <p>Pilihan Pengiriman</p>
                 
            </div>
        </div>
        <!-- menampilkan hasil dari pencarian user -->
        <div class="barang">
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
