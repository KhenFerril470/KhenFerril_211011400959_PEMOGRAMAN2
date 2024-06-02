<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbmhs");
$hasil = mysqli_query($koneksi, "SELECT * FROM tblmhs");

while ($data = mysqli_fetch_array($hasil)) {
    echo $data['FirstName'] . " " . $data['LastName'] . " " . $data['Age'] . "<br>";
}
?>
