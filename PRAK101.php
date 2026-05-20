<?php
$jari_jari = 7;
function hitung_luas_lingkaran($r) {
    $luas = 3.14 * $r * $r;
    return $luas;
}
$volume = hitung_luas_lingkaran($jari_jari) * 10; // Misalnya, tinggi tabung adalah 10
echo "Luas lingkaran dengan jari-jari $jari_jari adalah:";
?>