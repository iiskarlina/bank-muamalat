<?php 
    require 'components/header.php'
?>
        <div id="title-page" class="title-page">
            <h3>Pengajuan Pinjaman</h3>
        </div>
    </header>
    <div id="form-wrapper" class="form-wrapper">
        <div class="form-title-wrapper">
            <h3 id="form-title">Data Pengajuan</h3>
            <div class="bullets-wrapper">
                <div class="bullets-line">
                    <div class="progress-line-active" id="progress-line" style="width: 25%;"></div>
                </div>
                <div class="bullets active">
                    <i class="iconify" data-icon="solar:document-bold"></i>
                    <div class="bullets-info">Data Pengajuan</div>
                </div>
                <div id="flow-2" class="bullets">
                    <i class="iconify" data-icon="solar:card-bold"></i>
                    <div class="bullets-info">Data Pribadi</div>
                </div>
                <div id="flow-3" class="bullets">
                    <i class="iconify" data-icon="basil:bag-solid"></i>
                    <div class="bullets-info">Data Pekerjaan</div>
                </div>
                <div id="flow-4" class="bullets">
                    <i class="iconify" data-icon="typcn:upload"></i>
                    <div class="bullets-info">Upload Dokumen</div>
                </div>
                <div id="flow-5" class="bullets">
                    <i class="iconify" data-icon="solar:shield-check-bold"></i>
                    <div class="bullets-info">Ringkasan</div>
                </div>
            </div>
        </div>

        <div class="data-pengajuan" id="data-pengajuan">
            <div class="data-wrapper">
                <div class="div-form">
                    <label>Kantor Cabang :</label>
                    <div class="select-form">
                        <label class="select" for="kantor-cabang">
                            <select name="kantor-cabang" id="kantor-cabang" required>
                                <option value="" selected disabled hidden>
                                    Silahkan Pilih Kantor Cabang
                                </option>
                                <option disabled></option>
                                <option value="Bandung">1. Bandung</option>
                                <option value="Jakarta">2. Jakarta</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="div-form">
                    <label>Jenis Kredit :</label>
                    <div class="select-form">
                        <label class="select" for="jenis-kredit">
                            <select name="jenis-kredit" id="jenis-kredit" required>
                                <option value="" selected disabled hidden>
                                    Pilih jenis kredit yang anda inginkan
                                </option>
                                <option disabled></option>
                                <option value="Fixed Rate Mortgage (FRM)">1. Fixed Rate Mortgage (FRM)</option>
                                <option value="Adjustable-Rate Mortgage (ARM)">2. Adjustable-Rate Mortgage (ARM)</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="div-form input-biaya inputIcon">
                    <label>Harga Properti :</label>
                    <input type="number" name="harga-properti" id="harga-properti" />
                    <p class="rp">Rp</p>
                </div>
                <div class="div-form input-biaya inputIcon">
                    <label>Uang Muka :</label>
                    <input type="number" name="uang-muka" id="uang-muka" />
                    <p class="rp">Rp</p>
                </div>
                <div class="div-form input-biaya inputIcon">
                    <label>Nilai Pengajuan :</label>
                    <input type="number" name="nilai-pengajuan" id="nilai-pengajuan" />
                    <p class="rp">Rp</p>
                </div>
                <div class="div-form inputs inputIcons">
                    <label>Jangka Waktu :</label>
                    <input type="number" name="jangka-waktu" id="jangka-waktu" />
                    <p class="tahun">Tahun</p>
                </div>
                <div class="div-form">
                    <label>Pembayaran Angsuran :</label>
                    <div class="select-form">
                        <label class="select" for="pembayaran-angsuran">
                            <select name="pembayaran-angsuran" id="pembayaran-angsuran" required>
                                <option value="" selected disabled hidden>
                                    Pilih Metode Pembayaran
                                </option>
                                <option disabled></option>
                                <option value="Debit">1. Debit</option>
                                <option value="Kredit">2. Kredit</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>
            <p id="inputEmpty" style="color: red; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; text-align: left; display: none;">Harap lengkapi data terlebih dahulu.</p>
            <div class="button-wrapper">
                <button class="next-btn" id="next" onclick="next('data-pengajuan')">Lanjut</button>
                <button class="reset-btn" onclick="reset(1)">Reset</button>
            </div>
        </div>

        <div class="data-pribadi" id="data-pribadi" style="display: none;">
            <div class="data-wrapper">
                <div class="frame-left">
                    <div class="div-left">
                        <label>Nomor KTP :</label>
                        <div class="text-input">
                            <input type="text" name="no-ktp" id="no-ktp" placeholder="Masukkan nomor KTP anda" />
                        </div>
                    </div>
                    <div class="div-left">
                        <label>Nama Lengkap :</label>
                        <div class="text-input">
                            <input type="text" name="nama-lengkap" id="nama-lengkap" placeholder="Masukkan nama lengkap anda" />
                        </div>
                    </div>
                    <div class="frame-left-one">
                        <div class="inputWithIconn inputIconBg" style="gap: 6px;">
                            <label style="text-align: left;">Tanggal Lahir :</label>
                            <div class="input-tgllahir">
                                <input type="date" placeholder="Pilih tanggal" name="tgl-lahir" id="tgl-lahir" />
                            </div>
                            <p class="sides">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M7.7501 2.5C7.7501 2.30109 7.67108 2.11032 7.53043 1.96967C7.38978 1.82902 7.19901 1.75 7.0001 1.75C6.80119 1.75 6.61042 1.82902 6.46977 1.96967C6.32912 2.11032 6.2501 2.30109 6.2501 2.5V4.08C4.8101 4.195 3.8661 4.477 3.1721 5.172C2.4771 5.866 2.1951 6.811 2.0791 8.25H21.9211C21.8051 6.81 21.5231 5.866 20.8281 5.172C20.1341 4.477 19.1891 4.195 17.7501 4.079V2.5C17.7501 2.30109 17.6711 2.11032 17.5304 1.96967C17.3898 1.82902 17.199 1.75 17.0001 1.75C16.8012 1.75 16.6104 1.82902 16.4698 1.96967C16.3291 2.11032 16.2501 2.30109 16.2501 2.5V4.013C15.5851 4 14.8391 4 14.0001 4H10.0001C9.1611 4 8.4151 4 7.7501 4.013V2.5Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2 12C2 11.161 2 10.415 2.013 9.75H21.987C22 10.415 22 11.161 22 12V14C22 17.771 22 19.657 20.828 20.828C19.657 22 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2 19.657 2 17.771 2 14V12ZM17 14C17.2652 14 17.5196 13.8946 17.7071 13.7071C17.8946 13.5196 18 13.2652 18 13C18 12.7348 17.8946 12.4804 17.7071 12.2929C17.5196 12.1054 17.2652 12 17 12C16.7348 12 16.4804 12.1054 16.2929 12.2929C16.1054 12.4804 16 12.7348 16 13C16 13.2652 16.1054 13.5196 16.2929 13.7071C16.4804 13.8946 16.7348 14 17 14ZM17 18C17.2652 18 17.5196 17.8946 17.7071 17.7071C17.8946 17.5196 18 17.2652 18 17C18 16.7348 17.8946 16.4804 17.7071 16.2929C17.5196 16.1054 17.2652 16 17 16C16.7348 16 16.4804 16.1054 16.2929 16.2929C16.1054 16.4804 16 16.7348 16 17C16 17.2652 16.1054 17.5196 16.2929 17.7071C16.4804 17.8946 16.7348 18 17 18ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM7 14C7.26522 14 7.51957 13.8946 7.70711 13.7071C7.89464 13.5196 8 13.2652 8 13C8 12.7348 7.89464 12.4804 7.70711 12.2929C7.51957 12.1054 7.26522 12 7 12C6.73478 12 6.48043 12.1054 6.29289 12.2929C6.10536 12.4804 6 12.7348 6 13C6 13.2652 6.10536 13.5196 6.29289 13.7071C6.48043 13.8946 6.73478 14 7 14ZM7 18C7.26522 18 7.51957 17.8946 7.70711 17.7071C7.89464 17.5196 8 17.2652 8 17C8 16.7348 7.89464 16.4804 7.70711 16.2929C7.51957 16.1054 7.26522 16 7 16C6.73478 16 6.48043 16.1054 6.29289 16.2929C6.10536 16.4804 6 16.7348 6 17C6 17.2652 6.10536 17.5196 6.29289 17.7071C6.48043 17.8946 6.73478 18 7 18Z"
                                        fill="white" />
                                </svg>
                            </p>
                        </div>
                        <div>
                            <div class="inputWithIconn inputIconBg" style="gap: 6px;">
                                <label style="text-align: left;">Tempat Lahir :</label>
                                <div class="input-lahir">
                                    <label class="slct-short" for="tmpt-lahir">
                                        <select name="tmpt-lahir" id="tmpt-lahir" required>
                                            <option value="" selected disabled hidden>
                                                Pilih tempat
                                            </option>
                                            <option disabled></option>
                                            <option value="Jawa">1. Jawa</option>
                                            <option value="Sumatra">2. Sumatra</option>
                                            <option value="Papua">3. Papua</option>
                                        </select>
                                    </label>
                                </div>
                                <p class="sides">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.3283 14.4353 9.65339 14.3097 9.95671C14.1841 10.26 13.9999 10.5356 13.7678 10.7678C13.5356 10.9999 13.26 11.1841 12.9567 11.3097C12.6534 11.4353 12.3283 11.5 12 11.5ZM12 2C10.1435 2 8.36301 2.7375 7.05025 4.05025C5.7375 5.36301 5 7.14348 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 7.14348 18.2625 5.36301 16.9497 4.05025C15.637 2.7375 13.8565 2 12 2Z"
                                            fill="white" />
                                    </svg>
                                </p>
                            </div>
    
                        </div>
                    </div>
                    <div class="div-left">
                        <label>Email :</label>
                        <div class="text-input">
                            <input type="text" name="email" id="email" placeholder="Masukkan email anda" />
                        </div>
                    </div>
                    <div class="div-left">
                        <label>Nomor Handphone :</label>
                        <div class="text-input">
                            <input type="number" name="no-hp" id="no-hp" placeholder="Masukkan nomor HP anda" />
                        </div>
                    </div>
                    <div class="div-left">
                        <label>Status Pernikahan :</label>
                        <div>
                            <label class="select" for="status-menikah">
                                <select name="select" id="status-menikah" required>
                                    <option value="" selected disabled hidden>
                                        Silahkan Pilih
                                    </option>
                                    <option disabled></option>
                                    <option value="Belum Kawin">1. Belum Kawin</option>
                                    <option value="Kawin">2. Kawin</option>
                                    <option value="Cerai Hidup">3. Cerai Hidup</option>
                                    <option value="Cerai Mati">4. Cerai Mati</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
    
                <div class="frame-right">
                    <div class="div-right">
                        <label>Alamat :</label>
                        <div class="text-input">
                            <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat lengkap anda" />
                        </div>
                    </div>
                    <div class="frame-right-one">
                        <div class="div-right-two">
                            <label>RT :</label>
                            <div class="input-short">
                                <input type="text" name="rt" id="rt" placeholder="Masukkan RT" />
                            </div>
                        </div>
                        <div class="div-right-two">
                            <label>RW :</label>
                            <div class="input-short">
                                <input type="text" name="rw" id="rw" placeholder="Masukkan RW" />
                            </div>
                        </div>
                    </div>
                    <div class="frame-right-one">
                        <div class="div-right-two">
                            <label for="prov">Provinsi :</label>
                            <div class="input-right">
                                <label class="slct-short" for="prov">
                                    <select name="prov" id="prov" required>
                                        <option value="" selected disabled hidden>
                                            Silahkan Pilih
                                        </option>
                                        <option disabled></option>
                                        <option value="Jawa Barat">1. Jawa Barat</option>
                                        <option value="DKI Jakarta">2. DKI Jakarta</option>
                                        <option value="Kalimantan Selatan">3. Kalimantan Selatan</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="div-right-two">
                            <label for="kotakKab">Kabupaten/Kota :</label>
                            <div class="input-right">
                                <label class="slct-short" for="kota-kab">
                                    <select name="kota-kab" id="kota-kab" required>
                                        <option value="" selected disabled hidden>
                                            Silahkan Pilih
                                        </option>
                                        <option value="Kota Bandung">1. Kota Bandung</option>
                                        <option value="Bandung Barat">2. Bandung Barat</option>
                                        <option value="Bandung Timur">3. Bandung Timur</option>
                                        <option value="Bandung Selatan">4. Bandung Selatan</option>
                                        <option value="Bandung Utara">5. Bandung Utara</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="frame-right-one">
                        <div class="div-right-two">
                            <label for="kec">Kecamatan :</label>
                            <div class="input-right">
                                <label class="slct-short" for="kec">
                                    <select name="kec" id="kec" required>
                                        <option value="" selected disabled hidden>
                                            Silahkan Pilih
                                        </option>
                                        <option value="Cibeunying Kaler">1. Cibeunying Kaler</option>
                                        <option value="Gedebage">2. Gedebage</option>
                                        <option value="Buah Batu">3. Buah Batu</option>
                                        <option value="Kiara Condong">4. Kiara Condong</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="div-right-two">
                            <label for="kel">Kelurahan :</label>
                            <div class="input-right">
                                <label class="slct-short" for="kel">
                                    <select name="kel" id="kel" required>
                                        <option value="" selected disabled hidden>
                                            Silahkan Pilih
                                        </option>
                                        <option value="Cigadung">1. Cigadung</option>
                                        <option value="Sukaluyu">2. Sukaluyu</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="div-right">
                        <label>Kode Pos :</label>
                        <div class="text-input">
                            <input type="text" name="kode-pos" id="kode-pos" placeholder="Masukkan kode pos" />
                        </div>
                    </div>
                </div>
            </div>

            <p id="inputEmpty" style="color: red; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; text-align: left; display: none;">Harap lengkapi data terlebih dahulu.</p>
            <div class="button-wrapper">
                <button class="next-btn" id="next" onclick="next('data-pribadi')">Lanjut</button>
                <button class="reset-btn" onclick="reset(2)">Reset</button>
            </div>
        </div>

        <div class="data-pekerjaan" id="data-pekerjaan" style="display: none;">
            <div class="div-form">
                <label>Jenis Pekerjaan :</label>
                <div class="select-form">
                    <label class="select" for="jenis-pekerjaan">
                        <select name="jenis-pekerjaan" id="jenis-pekerjaan" required>
                            <option value="" disabled selected hidden required>
                                Silahkan pilih jenis pekerjaan
                            </option>
                            <option disabled></option>
                            <option value="1">1. PNS</option>
                            <option value="2">2. Wirausaha</option>
                            <option value="3">3. Swasta</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="div-form">
                <label>Nama perusahaan/instansi :</label>
                <div class="input-text">
                    <input type="text" name="nama-perusahaan" id="nama-perusahaan" placeholder="Masukkan nama perusahaan">
                </div>
            </div>
            <div class="div-form input-biaya inputIcon">
                <label>Penghasilan perbulan :</label>
                <input type="text" name="hasil" id="hasil">
                <p class="rp">Rp</p>
            </div>
            <div class="div-form input-biaya inputIcon">
                <label>Biaya kebutuhan hidup :</label>
                <input type="text" name="butuh" id="butuh">
                <p class="rp">Rp</p>
            </div>
            <div class="div-form input-biaya inputIcon">
                <label>Biaya lainnya :</label>
                <input type="text" name="biaya-lain" id="biaya-lain">
                <p class="rp">Rp</p>
            </div>
            <p id="inputEmpty" style="color: red; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; text-align: left; display: none;">Harap lengkapi data terlebih dahulu.</p>
            <div class="button-wrapper">
                <button class="next-btn" id="next" onclick="next('data-pekerjaan')">Lanjut</button>
                <button class="reset-btn">Reset</button>
            </div>
        </div>

        <div class="upload-document" id="upload-document" style="display: none;">
            <div class="file-upload-button">
                <input type="file" id="pas-photo" onchange="checkFile('pas-photo')" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" />
                <label for="pas-photo" id="pas-photo-button">
                    <div class="file-content">
                        <div class="file-icon">
                            <i class="iconify" data-icon="iconamoon:profile-circle-fill"></i>
                        </div>
                        <div class="file-desc">
                            <p class="title">Pas foto</p>
                            <p class="requirement">Unggah file dalam format PDF, JPG, JPEG atau PNG dengan ukuran maksimal 2 MB</p>
                        </div>
                    </div>
                    <i id="check-pas-photo" class="iconify" data-icon="system-uicons:checkbox-empty"></i>
                </label>
                <p id="fileTypeError" style="color: red; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; text-align: left; display: none;">Only image or PDF files are allowed.</p>
                <p id="fileSizeError" style="color: red; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; text-align: left; display: none;">File size exceeds the limit. Maximum file size 2MB.</p>
            </div>
            <div class="file-upload-button">
                <input type="file" id="ktp" onchange="checkFile('ktp')" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" />
                <label for="ktp" id="ktp-button">
                    <div class="file-content">
                        <div class="file-icon">
                            <i class="iconify" data-icon="solar:card-bold"></i>
                        </div>
                        <div class="file-desc">
                            <p class="title">Foto KTP</p>
                            <p class="requirement">Unggah file dalam format PDF, JPG, JPEG atau PNG dengan ukuran maksimal 2 MB</p>
                        </div>
                    </div>
                    <i id="check-ktp" class="iconify" data-icon="system-uicons:checkbox-empty"></i>
                </label>
                <p id="fileTypeError" style="color: red; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; text-align: left; display: none;">Only image or PDF files are allowed.</p>
                <p id="fileSizeError" style="color: red; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; text-align: left; display: none;">File size exceeds the limit. Maximum file size 2MB.</p>
            </div>
            <div class="file-upload-button">
                <input type="file" id="slip-gaji" onchange="checkFile('slip-gaji')" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" />
                <label for="slip-gaji" id="slip-gaji-button">
                    <div class="file-content">
                        <div class="file-icon">
                            <i class="iconify" data-icon="fluent:money-24-filled"></i>
                        </div>
                        <div class="file-desc">
                            <p class="title">Dokumen slip penghasilan</p>
                            <p class="requirement">Unggah file dalam format PDF, JPG, JPEG atau PNG dengan ukuran maksimal 2 MB</p>
                        </div>
                    </div>
                    <i id="check-slip-gaji" class="iconify" data-icon="system-uicons:checkbox-empty"></i>
                </label>
                <p id="fileTypeError" style="color: red; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; text-align: left; display: none;">Only image or PDF files are allowed.</p>
                <p id="fileSizeError" style="color: red; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; text-align: left; display: none;">File size exceeds the limit. Maximum file size 2MB.</p>
            </div>
            <div class="file-upload-button">
                <input type="file" id="tabungan" onchange="checkFile('tabungan')" accept=".pdf,.jpg,.jpeg,.png" style="display: none;" />
                <label for="tabungan" id="tabungan-button">
                    <div class="file-content">
                        <div class="file-icon">
                            <i class="iconify" data-icon="teenyicons:pie-chart-solid"></i>
                        </div>
                        <div class="file-desc">
                            <p class="title">Dokumen  Rekening Koran atau Tabungan 3 bulanTerakhir</p>
                            <p class="requirement">Unggah file dalam format PDF, JPG, JPEG atau PNG dengan ukuran maksimal 2 MB</p>
                        </div>
                    </div>
                    <i id="check-tabungan" class="iconify" data-icon="system-uicons:checkbox-empty"></i>
                </label>
                <p id="fileTypeError" style="color: red; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; text-align: left; display: none;">Only image or PDF files are allowed.</p>
                <p id="fileSizeError" style="color: red; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; text-align: left; display: none;">File size exceeds the limit. Maximum file size 2MB.</p>
            </div>
            <p id="inputEmpty" style="color: red; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 14px; text-align: left; display: none;">Harap lengkapi data terlebih dahulu.</p>
            <div class="button-wrapper">
                <button onclick="next('upload-document')" class="next-btn">Lanjut</button>
                <button onclick="reset(4)" class="reset-btn">Reset</button>
            </div>
        </div>

        <div id="resume" class="resume" style="display: none;">
            <div class="resume-wrapper">
                <h4>Ringkasan</h4>
                <div class="resume-grid">
                    <div class="resume-col">
                        <p class="heading-row">Pengajuan KPR sebesar</p>
                        <p class="heading-row">Skema pembayaran  DP sebesar</p>
                        <p class="heading-row">Pembayaran angsuran sebesar</p>
                        <p class="heading-row">Jangka waktu</p>
                    </div>
                    <div class="resume-col">
                        <div id="nominal-pengajuan" class="nominal">Rp 500.000.000,00</div>
                        <div id="nominal-dp" class="nominal">Rp 100.000.000,00</div>
                        <div id="nominal-angsuran" class="nominal">Rp 8.498.818</div>
                        <div id="jangka-waktu" class="nominal">5 tahun</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "components/footer.php"; ?>
</body>
</html>