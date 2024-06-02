<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Salam dan Tanggal</title>
</head>
<body>
<center>
<?php
// Dapatkan informasi waktu saat ini
$skrg = getdate();
$bulan = $skrg['month'];
$hari = $skrg['mday'];
$tahun = $skrg['year'];
$jam = $skrg['hours'];

// Tentukan salam berdasarkan jam saat ini
if ($jam <= 11) {
    $salam = "Selamat Pagi";
} elseif ($jam > 11 && $jam <= 15) {
    $salam = "Selamat Siang";
} elseif ($jam > 15 && $jam <= 18) {
    $salam = "Selamat Sore";
} elseif ($jam > 18) {
    $salam = "Selamat Malam";
}

// Tampilkan salam
echo "<h1>$salam</h1>";

// Tampilkan pesan "Selamat jumpa"
echo "<h2>Selamat jumpa</h2>";

// Tampilkan tanggal lengkap (hari, bulan, tahun) dengan format yang sesuai
echo "<h3>Saat ini tanggal $hari $bulan $tahun</h3>";
?>
</center>
</body>
</html>
