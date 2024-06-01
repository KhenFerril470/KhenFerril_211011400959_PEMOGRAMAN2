<!DOCTYPE html>
<html>
<head>
    <title>Deret Bilangan Ganjil</title>
</head>
<body>
    <h2>Deret Bilangan Ganjil yang Habis Dibagi 3</h2>
    <form method="post" action="">
        <label for="nilai_awal">Nilai Awal:</label>
        <input type="text" id="nilai_awal" name="nilai_awal">
        <label for="nilai_akhir">Nilai Akhir:</label>
        <input type="text" id="nilai_akhir" name="nilai_akhir">
        <input type="submit" value="Tampilkan">
    </form>

    <?php
    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai awal dan nilai akhir dari form
        $nilai_awal = isset($_POST['nilai_awal']) ? $_POST['nilai_awal'] : '';
        $nilai_akhir = isset($_POST['nilai_akhir']) ? $_POST['nilai_akhir'] : '';

        // Validasi input, pastikan nilai awal dan nilai akhir merupakan angka
        if (is_numeric($nilai_awal) && is_numeric($nilai_akhir)) {
            // Inisialisasi variabel untuk menyimpan jumlah deret bilangan dan jumlah dari deret bilangan
            $jumlah_deret = 0;
            $jumlah_total = 0;

            // Mencetak pesan hasil
            echo "<h3>Deret Bilangan Ganjil dari $nilai_awal sampai $nilai_akhir:</h3>";
            echo "<ul>";

            // Looping untuk menampilkan deret bilangan ganjil dan menghitung jumlahnya
            for ($i = $nilai_awal; $i <= $nilai_akhir; $i++) {
                if ($i % 2 != 0 && $i % 3 == 0) {
                    echo "<li>$i</li>";
                    $jumlah_deret++;
                    $jumlah_total += $i;
                }
            }

            echo "</ul>";
            echo "<p>Banyaknya deret bilangan: $jumlah_deret</p>";
            echo "<p>Jumlah dari deret bilangan: $jumlah_total</p>";
        } else {
            echo "<p>Nilai awal dan nilai akhir harus berupa angka.</p>";
        }
    }
    ?>
</body>
</html>
