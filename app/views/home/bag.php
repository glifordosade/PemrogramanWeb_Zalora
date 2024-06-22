<div class="putih">
    <div class="main">
        <?php if(isset($_SESSION['id'])AND($data['isibag']==null)) {?>
        <div class="emptylogoshield">
            <img class="emptylogo" src="<?= BASEURL; ?>/img/wishlistnot.png" alt="">
            <h3 class="bold">Tas Anda Kosong</h3>
            <p class="thin">Ayo penuhi dengan barang-barang favorit anda</p>
            <a class="linkk" href="<?= BASEURL;?>">Ayo Belanja</a>
        </div>
        <?php }else{ ?>
            <?php foreach($data['isibag'] as $it):?>
                
            <?php endforeach;?>
        <?php } ?>
    </div>
    <div class="main">
        flhasldfalsdfkjas;dflknlaskdflks
    </div>
</div>