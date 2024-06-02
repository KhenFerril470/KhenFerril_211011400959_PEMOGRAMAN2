<?php
$servername = "localhost";
$username = "root";
$password = "";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Membuat database
$sql = "CREATE DATABASE db_latihan11";
if ($conn->query($sql) === TRUE) {
    echo "Database berhasil dibuat";
} else {
    echo "Gagal membuat database: " . $conn->error;
}

$conn->close();
?>
