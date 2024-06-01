<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Tabel Perkalian</h2>
    <table>
        <thead>
            <tr>
                <th>&times;</th>
                <?php
                // Membuat header baris pertama (angka 1 sampai 10)
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Membuat tabel perkalian dari 1 hingga 10
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<th>$i</th>"; // Membuat header kolom pertama (angka 1 sampai 10)
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>" . ($i * $j) . "</td>"; // Mengisi sel tabel dengan hasil perkalian
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
