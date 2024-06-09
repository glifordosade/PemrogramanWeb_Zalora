<!-- menampilkan halaman wishlist -->
<?php if((isset($data['show'])==true)&&($data['show']!= null)){ ?>
    <?php foreach($data['show'] as $a){?>
        <ul>
            <li><?= $a['Brand']?></li>
        </ul>
    <?php }?>
    <?php }else{?>
        <?php foreach($data['rek'] as $a){?>
            <ul>
                <li><?= $a['Brand']?></li>
            </ul>
        <?php }?>
<?php }?>