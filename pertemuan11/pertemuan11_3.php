<?php
$koneksi = mysqli_connect("localhost", "root", "", "lat_dbase");

// Membuat tabel
$sql = "CREATE TABLE tbl_mhs (
    mhsID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(15),
    LastName VARCHAR(15),
    Age INT
)";

mysqli_query($koneksi, $sql);
?>
