<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbmhs");
$hasil = mysqli_query($koneksi, "SELECT * FROM tblmhs");

while ($data = mysqli_fetch_row($hasil)) {
    echo "$data[0] $data[1] $data[2]<br>";
}
?>
