<div class="putih">
    <div class="main">
        <div class="topList">
            <a href=""><img class="bulatan" src="<?= BASEURL;?>/img/satu.png" alt="gambar"></a>
            <a href=""><img class="bulatan" src="<?= BASEURL;?>/img/dua.png" alt="gambar"></a>
            <a href=""><img class="bulatan" src="<?= BASEURL;?>/img/tiga.png" alt="gambar"></a>
            <a href=""><img class="bulatan" src="<?= BASEURL;?>/img/empat.png" alt="gambar"></a>
            <a href=""><img class="bulatan" src="<?= BASEURL;?>/img/lima.png" alt="gambar"></a>
            <a href=""><img class="bulatan" src="<?= BASEURL;?>/img/enam.png" alt="gambar"></a>
            <a href=""><img class="bulatan" src="<?= BASEURL;?>/img/tujuh.png" alt="gambar"></a>
            <a href=""><img class="bulatan" src="<?= BASEURL;?>/img/delapan.png" alt="gambar"></a>
        </div>
    </div><br><br>
    <div class="main">
        <div>
            <div class="slideshow-container" id="slideshow1">
                <div class="mySlides1 fade">
                    <img src="https://images.ctfassets.net/9q8du028z7sn/13Ktoa587J6hxuTuxCso3P/003343ec724b0517c2a21123dfe92bc9/1920x725_DESK_HEROSECONDARY_66SALE_NC_NEWERA__1_.jpg" style="width:100%">
                </div>
    
                <div class="mySlides1 fade">
                    <img src="https://images.ctfassets.net/9q8du028z7sn/7ye2hhqCC0vbyWhUydfgg1/8e02a19bb9489e2bc90401c81273cfbc/4-Homepage-Desktop-Hero-1920x725_U.jpg" style="width:100%">
                </div>
    
                <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
            </div>
    
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1, 0)"></span> 
                <span class="dot" onclick="currentSlide(2, 0)"></span> 
            </div>
        </div>
    </div><br><br>

    <div class="bold fontsize">Temuan Teratas & Penawaran Menarik dalam Kategori Wanita</div>
    <div class="main">
        <?php foreach($data['wanita'] as $ss):?>
                <div class="cardlist">
                    <a class="cardd" href="<?= BASEURL;?>/Main/Detail/<?= $ss['Id_Barang'] ?>" >
                        <img class="cardimage" src="<?= BASEURL."/gambar/".$ss['Pic']?>" alt="">
                        <div class="hades">
                            <div class="bris">
                                <span class="brand"><?= $ss['Brand']?></span>
                                <!-- <button><img class="loggo" src="<?= BASEURL;?>/img/wishlist.png" alt=""></button> -->
                            </div>
                            <h6 class="deskripsi"><?= $ss['Descr']?></h6>
                            <h6 class="harga">Rp <?= number_format($ss['Harga'],0,",",".");?></h6>
                        </div>
                    </a>
                </div>
            <?php endforeach;?>
    </div><br><br>

    <div class="main">
        <div>
            <!-- Slideshow 2 -->
            <div class="slideshow-container" id="slideshow2"> 
                <div class="mySlides2 fade">
                    <img src="https://images.ctfassets.net/9q8du028z7sn/73Qo89L2tOhgjzcyFAs9U3/a32706614eaf6adda8e77bf2d45f6c8a/1920x725_DESK_HEROSECONDARY_MWS_Exclusive_Brands.gif" style="width:100%">
                </div>
    
                <div class="mySlides2 fade">
                    <img src="https://images.ctfassets.net/9q8du028z7sn/37TFzGf3Nm2UDtqS6G3LUd/280c515b534a7697cad32df977729348/2024-CW21-Women-N1-w21n1paydayshopdayextra25-1-dsk.jpg" style="width:100%">
                </div>
    
                <a class="prev" onclick="plusSlides1(-1, 0)">&#10094;</a>
                <a class="next" onclick="plusSlides1(1, 0)">&#10095;</a>
            </div>
    
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide1(1, 0)"></span> 
                <span class="dot" onclick="currentSlide1(2, 0)"></span> 
            </div>
        </div>
    </div>
</div>