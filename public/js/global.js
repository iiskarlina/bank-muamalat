window.addEventListener("resize", function() {
    const navHeight = document.getElementById("nav").offsetHeight;
    const heroElement = document.getElementById("hero") || document.getElementById("title-page");
    if (heroElement != null) {
        heroElement.style.paddingTop = `${navHeight}px`;
    }
})

function goToFooter() {
    var footer = document.querySelector("footer");
    footer.scrollIntoView();
}

function goToCalc() {
    var calc = document.getElementById("simulasi-kpr");
    calc.scrollIntoView();
}

function translateToEnglish() {
    var idBtn = document.getElementById("id-btn");
    var enBtn = document.getElementById("en-btn");

    idBtn.classList.remove("active");
    enBtn.classList.add("active");
}

function translateToBahasa() {
    var idBtn = document.getElementById("id-btn");
    var enBtn = document.getElementById("en-btn");

    idBtn.classList.add("active");
    enBtn.classList.remove("active");
}

function checkFile(id) {
    const input = document.getElementById(id);
    const file = input.files[0];
    const maxSize = 2 * 1024 * 1024;
    const allowedExtensions = ["png", "jpg", "jpeg", "pdf"];

    if (file) {
        const fileExtension = file.name.split(".").pop().toLowerCase();

        if (!allowedExtensions.includes(fileExtension)) {
            document.getElementById("fileTypeError").style.display = "block";
            input.value = null;
            return;
        }

        if (file.size > maxSize) {
            document.getElementById("fileSizeError").style.display = "block";
            input.value = null;
            return;
        }

        document.getElementById("fileTypeError").style.display = "none";
        document.getElementById("fileSizeError").style.display = "none";

        let icon;
        switch (id) {
            case "pas-photo":
                icon = document.getElementById("check-pas-photo");
                icon.setAttribute("data-icon", "system-uicons:checkbox-checked");
                icon.style.color = "#4F0B78";
                break;

            case "ktp":
                icon = document.getElementById("check-ktp");
                icon.setAttribute("data-icon", "system-uicons:checkbox-checked");
                icon.style.color = "#4F0B78";
                break;

            case "slip-gaji":
                icon = document.getElementById("check-slip-gaji");
                icon.setAttribute("data-icon", "system-uicons:checkbox-checked");
                icon.style.color = "#4F0B78";
                break;

            case "tabungan":
                icon = document.getElementById("check-tabungan");
                icon.setAttribute("data-icon", "system-uicons:checkbox-checked");
                icon.style.color = "#4F0B78";
                break;

            default:
                break;
        }
    } else {
        let icon;
        switch (id) {
            case "pas-photo":
                icon = document.getElementById("check-pas-photo");
                icon.setAttribute("data-icon", "system-uicons:checkbox-empty");
                icon.style.color = "#CAC5CD";
                break;

            case "ktp":
                icon = document.getElementById("check-ktp");
                icon.setAttribute("data-icon", "system-uicons:checkbox-empty");
                icon.style.color = "#CAC5CD";
                break;

            case "slip-gaji":
                icon = document.getElementById("check-slip-gaji");
                icon.setAttribute("data-icon", "system-uicons:checkbox-empty");
                icon.style.color = "#CAC5CD";
                break;

            case "tabungan":
                icon = document.getElementById("check-tabungan");
                icon.setAttribute("data-icon", "system-uicons:checkbox-empty");
                icon.style.color = "#CAC5CD";
                break;

            default:
                break;
        }
    }
}

function reset(flow) {
    let id;
    switch (flow) {
        case 1:
            id = ["kantor-cabang", "jenis-kredit", "harga-properti", "uang-muka", "nilai-pengajuan", "jangka-waktu", "pembayaran-angsuran"];
            id.forEach(id => {
                document.getElementById(id).value = "";
            });
            localStorage.removeItem("data_pengajuan");
            break;

        case 2:
            id = ["no-ktp", "nama-lengkap", "tgl-lahir", "tmpt-lahir", "email", "no-hp", "status-menikah", "alamat", "rt", "rw", "prov", "kota-kab"];
            id.forEach(id => {
                document.getElementById(id).value = "";
            });
            localStorage.removeItem("data_pribadi");
            break;

        case 3:
            id = ["jenis-pekerjaan", "nama-perusahaan", "hasil", "butuh", "biaya-lain"];
            id.forEach(id => {
                document.getElementById(id).value = "";
            });
            localStorage.removeItem("data_pekerjaan");
            break;

        case 4:
            id = ["pas-photo", "ktp", "slip-gaji", "tabungan"];
            id.forEach(id => {
                document.getElementById(id).value = "";
                checkFile(id);
            });
            break;

        default:
            break;
    }
}

function next(id) {
    switch (id) {
        case "data-pengajuan":
            const dataPengajuan = [
                document.getElementById("kantor-cabang").value,
                document.getElementById("jenis-kredit").value,
                document.getElementById("harga-properti").value,
                document.getElementById("uang-muka").value,
                document.getElementById("nilai-pengajuan").value,
                document.getElementById("jangka-waktu").value,
                document.getElementById("pembayaran-angsuran").value
            ];

            if (dataPengajuan.includes("")) {
                document.getElementById("inputEmpty").style.display = "block";
            } else {
                document.getElementById("inputEmpty").style.display = "none";

                const saveDataPengajuan = {
                    kantor_cabang: dataPengajuan[0],
                    jenis_kredit: dataPengajuan[1],
                    harga_properti: dataPengajuan[2],
                    uang_muka: dataPengajuan[3],
                    nilai_pengajuan: dataPengajuan[4],
                    jangka_waktu: dataPengajuan[5],
                    angsuran: dataPengajuan[6]
                }

                localStorage.setItem("data_pengajuan", JSON.stringify(saveDataPengajuan));

                document.getElementById("form-title").innerHTML = "Data Pribadi";
                document.getElementById("flow-2").classList.add("active");
                document.getElementById("data-pengajuan").style.display = "none";
                document.getElementById("data-pribadi").style.display = "flex";
                document.getElementById("progress-line").style.width = "50%";
            }
            break;

        case "data-pribadi":
            const dataPribadi = [
                document.getElementById("no-ktp").value,
                document.getElementById("nama-lengkap").value,
                document.getElementById("tgl-lahir").value,
                document.getElementById("tmpt-lahir").value,
                document.getElementById("email").value,
                document.getElementById("no-hp").value,
                document.getElementById("status-menikah").value,
                document.getElementById("alamat").value,
                document.getElementById("rt").value,
                document.getElementById("rw").value,
                document.getElementById("prov").value,
                document.getElementById("kota-kab").value
            ];

            if (dataPribadi.includes("")) {
                document.getElementById("inputEmpty").style.display = "block";
            } else {
                document.getElementById("inputEmpty").style.display = "none";

                const saveDataPribadi = {
                    no_ktp: dataPribadi[0],
                    nama_lengkap: dataPribadi[1],
                    tgl_lahir: dataPribadi[2],
                    tmpt_lahir: dataPribadi[3],
                    email: dataPribadi[4],
                    no_hp: dataPribadi[5],
                    status_menikah: dataPribadi[6],
                    alamat: dataPribadi[7],
                    rt: dataPribadi[8],
                    rw: dataPribadi[9],
                    prov: dataPribadi[10],
                    kota_kab: dataPribadi[11]
                }

                localStorage.setItem("data_pribadi", JSON.stringify(saveDataPribadi));

                document.getElementById("form-title").innerHTML = "Data Pekerjaan";
                document.getElementById("flow-3").classList.add("active");
                document.getElementById("data-pribadi").style.display = "none";
                document.getElementById("data-pekerjaan").style.display = "flex";
                document.getElementById("progress-line").style.width = "75%";
            }
            break;

        case "data-pekerjaan":
            const dataPekerjaan = [
                document.getElementById("jenis-pekerjaan").value,
                document.getElementById("nama-perusahaan").value,
                document.getElementById("hasil").value,
                document.getElementById("butuh").value,
                document.getElementById("biaya-lain").value
            ];

            if (dataPekerjaan.includes("")) {
                document.getElementById("inputEmpty").style.display = "block";
            } else {
                document.getElementById("inputEmpty").style.display = "none";

                const saveDataPekerjaan = {
                    jenis_pekerjaan: dataPekerjaan[0],
                    nama_perusahaan: dataPekerjaan[1],
                    hasil: dataPekerjaan[2],
                    butuh: dataPekerjaan[3],
                    biaya_lain: dataPekerjaan[4]
                }

                localStorage.setItem("data_pekerjaan", JSON.stringify(saveDataPekerjaan));

                document.getElementById("form-title").innerHTML = "Upload Dokumen";
                document.getElementById("flow-4").classList.add("active");
                document.getElementById("data-pekerjaan").style.display = "none";
                document.getElementById("upload-document").style.display = "flex";
                document.getElementById("progress-line").style.width = "100%";
            }
            break;

        case "upload-document":
            const dataDocument = [
                document.getElementById("pas-photo").value,
                document.getElementById("ktp").value,
                document.getElementById("slip-gaji").value,
                document.getElementById("tabungan").value
            ];

            if (dataDocument.includes("")) {
                document.getElementById("inputEmpty").style.display = "block";
            } else {
                document.getElementById("inputEmpty").style.display = "none";

                // upload file disini

                // upload semua data ke database disini

                document.getElementById("form-title").innerHTML = "Ringkasan";
                document.getElementById("flow-5").classList.add("active");
                document.getElementById("upload-document").style.display = "none";
                document.getElementById("resume").style.display = "block";

                const pengajuan = JSON.parse(localStorage.getItem("data_pengajuan"));

                document.getElementById("nominal-pengajuan").innerHTML = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(pengajuan.nilai_pengajuan);
                document.getElementById("nominal-dp").innerHTML = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(pengajuan.uang_muka);
                document.getElementById("nominal-angsuran").innerHTML = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(pengajuan.nilai_pengajuan/pengajuan.jangka_waktu);;
                document.getElementById("jangka-waktu").innerHTML = `${pengajuan.jangka_waktu} tahun`;
            }
            break;

        default:
            break;
    }
}

function refresh() {
    window.location.reload();
}