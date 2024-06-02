<?php
// Cara 1: Mendefinisikan data dalam array secara langsung

// Array yang berisi data alas dan tinggi
$alas = [3, 5, 7, 9, 11];
$tinggi = [4, 6, 8, 10, 12];

// Fungsi untuk menghitung luas segitiga
function hitung_luas_segitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Menghitung dan mencetak luas untuk masing-masing segitiga
for ($i = 0; $i < count($alas); $i++) {
    $luas = hitung_luas_segitiga($alas[$i], $tinggi[$i]);
    echo "Luas segitiga dengan alas {$alas[$i]} dan tinggi {$tinggi[$i]} adalah {$luas} <br>";
}
?>
