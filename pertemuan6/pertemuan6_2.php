<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Segitiga</title>
</head>
<body>
    <form method="post">
        <?php for ($i = 0; $i < 5; $i++): ?>
            <label for="alas<?php echo $i; ?>">Masukkan alas segitiga ke-<?php echo $i+1; ?>:</label>
            <input type="number" name="alas[]" id="alas<?php echo $i; ?>" step="0.01" required>
            <br>
            <label for="tinggi<?php echo $i; ?>">Masukkan tinggi segitiga ke-<?php echo $i+1; ?>:</label>
            <input type="number" name="tinggi[]" id="tinggi<?php echo $i; ?>" step="0.01" required>
            <br><br>
        <?php endfor; ?>
        <input type="submit" value="Hitung Luas">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        // Fungsi untuk menghitung luas segitiga
        function hitung_luas_segitiga($alas, $tinggi) {
            return 0.5 * $alas * $tinggi;
        }

        // Menghitung dan mencetak luas untuk masing-masing segitiga
        for ($i = 0; $i < count($alas); $i++) {
            $luas = hitung_luas_segitiga($alas[$i], $tinggi[$i]);
            echo "Luas segitiga dengan alas {$alas[$i]} dan tinggi {$tinggi[$i]} adalah {$luas} <br>";
        }
    }
    ?>
</body>
</html>
