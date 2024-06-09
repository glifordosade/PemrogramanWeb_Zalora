
<div id="container">
    <div id="pilihan">
        <div>
            <a href="<?=BASEURL;?>/Regist/pelbaru">Pelanggan Baru</a>
        </div>
        <div style="border-bottom: 5px solid black;">
            <a href="<?=BASEURL;?>/Regist/pelma">Pelanggan Lama</a>
        </div>
    </div>
    <br>
    <!-- menampilkan notifikasi jika dari kontroller mengirimkan triger notifikasi -->
    <?php Flasherf::flashf();?>
    <form id="registration-form" method="POST" action="<?= BASEURL;?>/Account/log">
        <label for="email">Alamat Email</label>
        <input class="alepapan" type="email" name="email">

        <label for="password">Password</label>
        <input class="alepapan" type="password" name="password">
        
        <a href="#" id="lupa">lupa Password</a>
        
        <div class="form-item">
            <input type="checkbox" id="remember-me">
            <label id="lab" for="remember-me">Saya ingin tetap login</label><br>
        </div>

        <!-- <input type="submit"> -->
        <div class="submit">
            <button type="submit" name="submit" value="submit">Masuk</button>
        </div>
        <div class="terms">
            <div class="box-center-tnc">
                Dengan membuat atau mendaftar akun, Anda menyetujui isi
                <a href="#" class="green-tnc">Persyaratan dan Ketentuan</a>
                &
                <a href="#" class="green-tnc">Kebijakan Privasi</a>
                kami.
            </div>
        </div>
    </form>
</div>