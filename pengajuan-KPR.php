<?php 
    require 'components/header.php'
?>
        <div id="hero" class="hero">
            <img src="public/img/poster/Redesign _ Website Muamalat DIN_Poster.svg" alt="poster">
        </div>
    </header>
    <section id="pengajuan">
        <h2>Pengajuan KPR</h2>
        <h5>Miliki Rumah Idaman sekaligus Wujudkan Impian ke Baitullah</h5>
        <div class="container">
            <div class="card">
                <img src="public/img/icon/icon-kpr.png" alt="icon-kpr">
                <div class="content-wrapper">
                    <p class="judul-card">KPR iB Hijrah</p>
                    <p class="deskripsi-card">KPR Hijrah adalah pembiayaan kepemilikan rumah yang memudahkan Anda mewujudkan rumah impian yang InshaAllah lebih berkah, mudah, nyaman dan sesuai syariah. Selain untuk pembelian rumah, <a href="kpr.php">Anda dapat...</a></p>
                    <div class="buttons">
                        <a href="form-pengajuan-KPR.php" class="button-ajukan">Ajukan Sekarang</a>
                        <a href="" class="button-lihat-cara">Lihat Cara Pengajuan</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="public/img/icon/icon-multiguna.png" alt="icon-multiguna">
                <div class="content-wrapper">
                    <p class="judul-card">Multiguna iB Hijrah</p>
                    <p class="deskripsi-card">Hijrah Multiguna adalah fasilitas pembiayaan untuk memenuhi kebutuhan konsumtif Anda. Pengajuan pembiayaan Multiguna yang sesuai Prinsip Syariah dengan angsuran <a href="multiguna.php">yang fleksibel.</a>
                    <div class="buttons">
                        <a href="" class="button-ajukan">Ajukan Sekarang</a>
                        <a href="" class="button-lihat-cara">Lihat Cara Pengajuan</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="public/img/icon/icon-tabel.png" alt="icon-tabel">
                <div class="content-wrapper">
                    <p class="judul-card">Tabel Angsuran Multiguna Umroh</p>
                    <p class="deskripsi-card">Hijrah Multiguna adalah fasilitas pembiayaan untuk memenuhi kebutuhan konsumtif Anda. Pengajuan pembiayaan Multiguna yang sesuai Prinsip Syariah dengan angsuran yang fleksibel.</p>
                    <div class="buttons">
                        <a href="table.php" class="button-selengkapnya">Selengkapnya...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="simulasi-kpr">
        <div class="panel-heading">
            <h2>Simulasi KPR</h2>
            <h5>Langkah Pintar Menuju Rumah Impian: Mulai Dengan Simulasi KPR</h5>
        </div>
        <div class="panel-body">
            <div class="panel-page">
                <a class="panel-page-pendapatan" href="kalkulator-kpr.php" id="pendapatan">Pendapatan</a>
                <a class="panel-page-sukubunga" href="suku-bunga.php" id="sukubunga">Suku Bunga</a>
            </div>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label class="control-label" for="tipe-pekerjaan">Tipe Pekerjaan</label>
                    <select name="tipe-pekerjaan" id="tipe-pekerjaan">
                        <option value="" selected disabled hidden>Silahkan Pilih</option>
                        <option value="pegawai">Pegawai/Profesional</option>
                        <option value="wiraswasta">Wiraswasta</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="control-label" for="pandapatan-bulanan">Pendapatan Bulanan</label>
                    <div class="input-group">
                        <span class="input-group-addon-rp">Rp</span>
                        <input class="input-value-group-bulanan" type="number" name="pendapatan-bulanan" placeholder="Gaji Bersih Perbulan" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="jangka-kredit">Jangka Waktu Kredit</label>
                    <div class="input-group">
                        <input class="input-value-group-kredit"  type="number" name="jangka-kredit" placeholder="Misal, 4">
                        <span class="input-group-addon-tahun">Tahun</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="cicilan-bulanan">Cicilan yang berlangsung tiap bulan</label>
                    <div class="input-group">
                        <span class="input-group-addon-rp">Rp</span>
                        <input class="input-value-group-cicilan"  type="number" name="cicilan-bulan" placeholder="Angsuran Lainnya" required>
                    </div>
                </div>

                <div class="row-button">
                    <input type="submit" name="submit" value="Hitung" class="row-submit">
                    <input type="button" onclick="refresh()" value="Reset Perhitungan" class="row-reset">
                </div>

            </form>

            <div class="hasil-perhitungan">
                <label class="control-label" for="hasil">Hasil Perhitungan Simulasi KPR</label>
                <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
                <p class="nilai-hasil-perhitungan">
                    <?php
                        if (isset($_POST['submit'])) {
                            $tipe_pekerjaan = $_POST['tipe-pekerjaan'];
                            $pendapatan = $_POST['pendapatan-bulanan'];
                            $jangka_waktu_kredit = $_POST['jangka-kredit'];
                            $cicilan_lainnya = $_POST['cicilan-bulan'];
                            $suku_bunga_tahunan = 0.07;

                            //menghitung limit kredit maksimum
                            $suku_bunga_bulanan = $suku_bunga_tahunan/12;
                            $jumlah_cicilan = $jangka_waktu_kredit * 12;

                            $faktor_pengali = (1-pow(1 + $suku_bunga_bulanan,-$cicilan_lainnya))/$suku_bunga_bulanan;
                            $limit_kredit = $pendapatan * $faktor_pengali;

                            //Angsuran bulanan
                            $angsuran = $limit_kredit * $suku_bunga_bulanan / (1 - pow(1 + $suku_bunga_bulanan, -$jumlah_cicilan));

                            $formatted_limit_kredit = '<span style="color: purple; font-size: 17px"> Rp. ' . number_format($limit_kredit, 0, ',', '.') . '</span>';
                            $formatted_angsuran = '<span style="color: purple; font-size: 17px"> Rp. ' . number_format($angsuran, 0, ',', '.') . '</span>';

                            echo 'Dengan pendapatan kamu saat ini, kamu bisa melakukan peminjaman hingga ' . $formatted_limit_kredit . ' untuk kpr.';echo "<br \>";
                            echo "Angsuran Bulanan: " . $formatted_angsuran . "\n";
                        }
                    ?>
                </p>
            </div>
        </div>
    </section>
    <?php include "components/footer.php"; ?>
</body>
</html>