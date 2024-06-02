<!DOCTYPE html>
<html>
<head>
    <title>Materi Pemrograman PHP</title>
</head>
<body>
    <h1>Materi Pemrograman PHP</h1>
    <form method="post">
        <label>[1] Penggunaan IF</label><br>
        <label>[2] Penggunaan SWITCH..CASE</label><br>
        <label>[3] Penggunaan Looping</label><br>
        <label>[4] Penggunaan Array</label><br><br>
        <label for="choice">Pilih Materi yang ingin anda pelajari: [1|2|3|4]</label>
        <input type="text" id="choice" name="choice" required><br><br>
        <input type="submit" value="Pilih">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $choice = $_POST["choice"];
        
        switch ($choice) {
            case '1':
                penggunaanIF();
                break;
            case '2':
                penggunaanSwitchCase();
                break;
            case '3':
                penggunaanLooping();
                break;
            case '4':
                penggunaanArray();
                break;
            default:
                echo "Pilihan tidak valid. Silakan pilih antara 1, 2, 3, atau 4.";
        }
    }

    function penggunaanIF() {
        echo "<h2>Penggunaan IF</h2>";
        $nilaiAkhir = 85;
        $grade = '';

        if ($nilaiAkhir >= 90) {
            $grade = 'A';
        } elseif ($nilaiAkhir >= 80) {
            $grade = 'B';
        } elseif ($nilaiAkhir >= 70) {
            $grade = 'C';
        } elseif ($nilaiAkhir >= 60) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        echo "Nilai Akhir: $nilaiAkhir<br>";
        echo "Grade: $grade<br>";
    }

    function penggunaanSwitchCase() {
        echo "<h2>Penggunaan SWITCH..CASE</h2>";
        $num1 = 10;
        $num2 = 5;
        $operation = '+';
        $result = 0;

        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Tidak bisa membagi dengan nol.";
                    return;
                }
                break;
            default:
                echo "Operasi tidak valid.";
                return;
        }

        echo "Operasi: $num1 $operation $num2 = $result<br>";
    }

    function penggunaanLooping() {
        echo "<h2>Penggunaan Looping</h2>";
        echo "Bilangan genap yang habis dibagi 3:<br>";
        $count = 0;

        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 == 0 && $i % 3 == 0) {
                echo "$i ";
                $count++;
            }
        }

        echo "<br>Total bilangan: $count<br>";
    }

    function penggunaanArray() {
        echo "<h2>Penggunaan Array (Perkalian Matriks)</h2>";

        $matriksA = [
            [1, 2],
            [3, 4]
        ];
        $matriksB = [
            [5, 6],
            [7, 8]
        ];

        $result = [
            [0, 0],
            [0, 0]
        ];

        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                for ($k = 0; $k < 2; $k++) {
                    $result[$i][$j] += $matriksA[$i][$k] * $matriksB[$k][$j];
                }
            }
        }

        echo "Matriks A:<br>";
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                echo $matriksA[$i][$j] . " ";
            }
            echo "<br>";
        }

        echo "<br>Matriks B:<br>";
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                echo $matriksB[$i][$j] . " ";
            }
            echo "<br>";
        }

        echo "<br>Hasil Perkalian Matriks A dan B:<br>";
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                echo $result[$i][$j] . " ";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>
