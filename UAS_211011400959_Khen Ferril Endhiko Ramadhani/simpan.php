<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "dblogineuro"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$nama_negara = $_POST['nama_negara'];
$jumlah_menang = $_POST['jumlah_menang'];
$jumlah_seri = $_POST['jumlah_seri'];
$jumlah_kalah = $_POST['jumlah_kalah'];
$jumlah_poin = $_POST['jumlah_poin'];

// Query SQL untuk menyimpan data ke tabel klasemen_uefa
$sql = "INSERT INTO klasemen_uefa (nama_negara, jumlah_menang, jumlah_seri, jumlah_kalah, jumlah_poin)
        VALUES ('$nama_negara', $jumlah_menang, $jumlah_seri, $jumlah_kalah, $jumlah_poin)";

if ($conn->query($sql) === TRUE) {
    echo "Data klasemen berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
