
<div id="container">
    <div id="pilihan">
        <div style="border-bottom: 5px solid black;">
            <a href="<?=BASEURL;?>/Regist/pelbaru">Pelanggan Baru</a>
        </div>
        <div>
            <a href="<?=BASEURL;?>/Regist/pelma">Pelanggan Lama</a>
        </div>
    </div>
        <br>
        <form id="registration-form" method="POST" action="<?= BASEURL;?>/Regist/regist">

            <label for="email">Alamat Email</label>
            <input class="alepapan" type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input class="alepapan" type="password" id="password" name="pass" required>

            <label for="gender">Gender* <span id="selip">- untuk personalisasi akun</span></label>
            <div class="gender-options">
                <input type="radio" name="gender" value="Wanita" required><label class="kelamin">Wanita</label>
                <input type="radio" name="gender" value="Pria" require><label class="kelamin">Pria</label>
            </div>

            <label for="name">Nama Depan</label>
            <input class="alepapan" type="text" id="name" name="username" required>

            <label for="dob">Tanggal Lahir <span id="selip">- dapatkan kejutan hari ulang tahun!</span></label>
            <div class="dob-container">
                <select class="tang" name="date" required>
                    <option value="">Tanggal</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="26">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <!-- Add more options here -->
                </select>
                <select class="tang" name="bulan"  required>
                    <option value="">Bulan</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                    <!-- Add more options here -->
                </select>
                <input class="tang" type="number" name="tahun" placeholder="tahun" require>
            </div>

            <div class="form-item">
                <input type="checkbox" id="remember-me" require>
                <label id="lab" for="remember-me">Saya ingin tetap login</label><br>
                <input type="checkbox" id="terms" required>
                <label id="lab" for="terms">Kirimi saya newsletter dan penawaran eksklusif dari ZALORA</label><br>
            </div>
            <div class="submit">
                <button type="submit">KONFIRMASI DAN LANJUTKAN</button>
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
