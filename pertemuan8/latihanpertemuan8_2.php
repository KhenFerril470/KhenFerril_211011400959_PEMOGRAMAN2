<!DOCTYPE html>
<html>
<head>
    <title>Manipulasi String</title>
</head>
<body>
<?php
// 1. Menerima input string teks dari pengguna
$string = "Ini adalah contoh string untuk diproses";

// 2. Menghitung jumlah karakter dalam string teks
$jumlah_karakter = strlen($string);

// 3. Mengubah semua huruf dalam string menjadi huruf besar
$string_besar = strtoupper($string);

// 4. Mengubah semua huruf dalam string menjadi huruf kecil
$string_kecil = strtolower($string);

// 5. Menghapus spasi di awal dan di akhir string
$string_trim = trim($string);

// 6. Memisahkan kata-kata dalam string menjadi array
$array_kata = explode(" ", $string);

// 7. Menampilkan hasil manipulasi string
echo "String teks: \"$string\"<br>";
echo "Jumlah karakter: $jumlah_karakter<br>";
echo "String teks dalam huruf besar: \"$string_besar\"<br>";
echo "String teks dalam huruf kecil: \"$string_kecil\"<br>";
echo "String teks setelah di-trim: \"$string_trim\"<br>";
echo "Array kata-kata: " . json_encode($array_kata) . "<br>";
?>
</body>
</html>
