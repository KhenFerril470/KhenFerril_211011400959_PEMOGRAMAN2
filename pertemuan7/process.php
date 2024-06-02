<!DOCTYPE html>
<html>
<head>
    <title>Function UDF</title>
</head>
<body>
    <h2>Input Bilangan</h2>
    <form method="post">
        Masukkan Bilangan Pertama:<br>
        <input type="text" name="A1" size="10" required><br>
        Masukkan Bilangan Kedua:<br>
        <input type="text" name="B1" size="10" required><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $A1 = $_POST["A1"];
        $B1 = $_POST["B1"];

        function jumlah1($A1, $B1) {
            return $A1 + $B1;
        }

        function kurang1($A1, $B1) {
            return $A1 - $B1;
        }

        function kali1($A1, $B1) {
            return $A1 * $B1;
        }

        function bagi1($A1, $B1) {
            if ($B1 == 0) {
                return "undefined (division by zero)";
            }
            return $A1 / $B1;
        }

        echo "<br>";
        echo "Bilangan Pertama: $A1<br>";
        echo "Bilangan Kedua: $B1<br><br>";

        echo "Hasil Penjumlahan 2 buah bilangan:<br>";
        $jumlahbil = jumlah1($A1, $B1);
        printf("Penjumlahan antara: %d + %d = %d<br><br>", $A1, $B1, $jumlahbil);

        echo "Hasil Pengurangan 2 buah bilangan:<br>";
        $kurangbil = kurang1($A1, $B1);
        printf("Pengurangan antara: %d - %d = %d<br><br>", $A1, $B1, $kurangbil);

        echo "Hasil Perkalian 2 buah bilangan:<br>";
        $kalibil = kali1($A1, $B1);
        printf("Perkalian antara: %d * %d = %d<br><br>", $A1, $B1, $kalibil);

        echo "Hasil Pembagian 2 buah bilangan:<br>";
        $bagibil = bagi1($A1, $B1);
        if (is_numeric($bagibil)) {
            printf("Pembagian antara: %d / %d = %.2f<br><br>", $A1, $B1, $bagibil);
        } else {
            echo "Pembagian antara: $A1 / $B1 = $bagibil<br><br>";
        }
    }
    ?>
</body>
</html>
