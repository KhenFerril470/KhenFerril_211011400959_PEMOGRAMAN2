<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbmhs");
$hasil = mysqli_query($koneksi, "SELECT * FROM tblmhs");
$hit1 = mysqli_num_rows($hasil);
echo "Jumlah record: " . $hit1;
?>
