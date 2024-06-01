<?php
// Pastikan form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $komentar = isset($_POST['komentar']) ? $_POST['komentar'] : '';

    // Validasi data
    if (!empty($nama) && !empty($email) && !empty($komentar)) {
        // Buat string data yang akan disimpan
        $data = "Nama: $nama\nEmail: $email\nKomentar: $komentar\n\n";

        // Simpan data ke dalam file teks
        $file = 'buku_tamu.txt';
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

        echo "<h2>Terima kasih telah mengisi buku tamu!</h2>";
    } else {
        echo "<h2>Silakan lengkapi semua kolom!</h2>";
    }
} else {
    // Redirect ke form jika form tidak disubmit
    header("Location: form_buku_tamu.php");
    exit;
}
?>
