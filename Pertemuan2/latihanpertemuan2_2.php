<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Nilai</title>
</head>
<body>
    <h2>Perhitungan Nilai</h2>
    <form action="" method="post">
        <label for="nilai1">Nilai 1:</label>
        <input type="number" id="nilai1" name="nilai1" required><br><br>

        <label for="nilai2">Nilai 2:</label>
        <input type="number" id="nilai2" name="nilai2" required><br><br>

        <label for="operator">Pilih Operator:</label>
        <select id="operator" name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
        </select><br><br>

        <input type="submit" value="Hitung">
    </form>

    <?php
    // Memeriksa apakah formulir telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan nilai dari input formulir
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $operator = $_POST['operator'];

        // Inisialisasi variabel hasil
        $hasil = 0;

        // Melakukan operasi aritmatika sesuai operator yang dipilih
        switch ($operator) {
            case 'tambah':
                $hasil = $nilai1 + $nilai2;
                break;
            case 'kurang':
                $hasil = $nilai1 - $nilai2;
                break;
            case 'kali':
                $hasil = $nilai1 * $nilai2;
                break;
            case 'bagi':
                // Memastikan pembagian tidak terjadi jika nilai kedua adalah nol
                if ($nilai2 != 0) {
                    $hasil = $nilai1 / $nilai2;
                } else {
                    echo "Tidak dapat melakukan pembagian dengan nilai nol.";
                }
                break;
            default:
                echo "Operator tidak valid.";
                break;
        }

        // Menampilkan hasil perhitungan
        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</body>
</html>
