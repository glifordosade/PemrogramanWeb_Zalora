<div class="putih">
    <div class="main">
        <div class="blk">
            <h1 class="bold2 fontsize">Pencarian untuk "<?= $data['search'];?>"</h1> 
        </div>
    </div><br>
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
         <?php if(isset($data['barang'])AND($data['barang']!=null)){ ?>
            <div class="barang">
                <?php foreach($data['barang'] as $it):?>
                <a class="cardd" href="<?= BASEURL;?>/Main/Detail/<?= $it['Id_Barang'] ?>" >
                    <img class="cardimage" src="<?= BASEURL."/gambar/".$it['Pic']?>" alt="">
                    <div>
                        <div class="bris">
                            <span class="brand"><?= $it['Brand']?></span>
                            <!-- <button><img class="loggo" src="<?= BASEURL;?>/img/wishlist.png" alt=""></button> -->
                        </div>
                        <h6 class="deskripsi"><?= $it['Descr']?></h6>
                        <h6 class="harga">Rp <?= number_format($it['Harga'],0,",",".");?></h6>
                    </div>
                    <!-- <a href="">Masukkan ke Tas</a> -->
                </a>
                <?php endforeach;?>  
            </div>
        <?php }else{?>
            <div class="main">
                <div class="blk1">
                    <h1 class="bold2 fontsize">Oops Barang yang anda cari tidak ada</h1> 
                </div>
            </div><br>
        <?php }?>  
    </div>
    </div>
</div>
