<?php
$servername = "localhost";
$username = "root";
$password = "";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password);

// Menutup koneksi
if (mysqli_close($conn)) {
    echo "Koneksi berhasil ditutup";
}
?>
