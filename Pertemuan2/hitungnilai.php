<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Nilai</title>
</head>
<body>
    <h2>Hasil Perhitungan Nilai</h2>
    <?php
    // Memeriksa apakah formulir telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan nilai dari input formulir
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];

        // Menghitung rata-rata
        $rata_rata = ($tugas + $uts + $uas) / 3;

        // Menampilkan hasil
        echo "<p>Nama: $nama</p>";
        echo "<p>Jurusan: $jurusan</p>";
        echo "<p>Nilai Tugas: $tugas</p>";
        echo "<p>Nilai UTS: $uts</p>";
        echo "<p>Nilai UAS: $uas</p>";
        echo "<p>Rata-rata: $rata_rata</p>";
    } else {
        // Jika formulir belum disubmit, tampilkan pesan ini
        echo "<p>Silakan isi formulir di atas untuk menghitung rata-rata nilai.</p>";
    }
    ?>
</body>
</html>
