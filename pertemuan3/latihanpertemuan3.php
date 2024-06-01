<?php
// Input data
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$matakuliah = $_POST['matakuliah'];
$kehadiran = intval($_POST['kehadiran']);
$tugas = intval($_POST['tugas']);
$uts = intval($_POST['uts']);
$uas = intval($_POST['uas']);

// Fungsi untuk menghitung nilai akhir
function hitungNilaiAkhir($kehadiran, $tugas, $uts, $uas) {
    // Lakukan perhitungan sesuai dengan rumus yang telah ditentukan
}

// Fungsi untuk menentukan grade dan keterangan
function tentukanGrade($nilaiAkhir) {
    // Lakukan penentuan grade dan keterangan sesuai dengan kriteria yang telah ditentukan
}

// Hitung nilai akhir
$nilaiAkhir = hitungNilaiAkhir($kehadiran, $tugas, $uts, $uas);

// Tentukan grade dan keterangan
list($grade, $keterangan) = tentukanGrade($nilaiAkhir);

// Menampilkan output
echo "NILAI AKADEMIK.............................($matakuliah)<br>";
echo "Nama: $nama<br>";
echo "NIM: $nim<br>";
echo "Jumlah Kehadiran : $kehadiran<br>";
echo "Nilai Kehadiran : " . ($kehadiran * 10) . "<br>"; // Kehadiran maksimal adalah 18, maka nilai kehadiran adalah 100
echo "Nilai Tugas : $tugas<br>";
echo "Nilai UTS : $uts<br>";
echo "Nilai UAS : $uas<br>";
echo "Nilai Akhir : $nilaiAkhir<br>";
echo "Grade : $grade<br>";
echo "Keterangan : $keterangan<br>";
?>
