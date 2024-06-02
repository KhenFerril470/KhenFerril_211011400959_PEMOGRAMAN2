<?php
$koneksi = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tblnilai";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    // Menampilkan formulir untuk setiap baris data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<form action=\"aksi.php\" method=\"post\">";
        echo "NIM: <input type=\"text\" name=\"nim\" value=\"" . $row['nim'] . "\"><br>";
        echo "Nama Mahasiswa: <input type=\"text\" name=\"nama_mhs\" value=\"" . $row['nama_mhs'] . "\"><br>";
        echo "Mata Kuliah: <input type=\"text\" name=\"matakuliah\" value=\"" . $row['matakuliah'] . "\"><br>";
        echo "UTS: <input type=\"text\" name=\"uts\" value=\"" . $row['uts'] . "\"><br>";
        echo "UAS: <input type=\"text\" name=\"uas\" value=\"" . $row['uas'] . "\"><br>";
        echo "Tugas: <input type=\"text\" name=\"tugas\" value=\"" . $row['tugas'] . "\"><br>";
        echo "Jumlah Hadir: <input type=\"text\" name=\"jmlhadir\" value=\"" . $row['jmlhadir'] . "\"><br>";
        echo "<input type=\"submit\" value=\"Submit\">";
        echo "</form>";
        echo "<br>";
    }
} else {
    echo "Tidak ada data dalam tabel.";
}

mysqli_close($koneksi);
?>
