<!DOCTYPE html>
<html>
<head>
    <title>Klasemen UEFA 2024</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Klasemen UEFA 2024</h2>
    <?php
    // Data klasemen statis
    $standings = [
        ["nama_negara" => "Negara A", "jumlah_menang" => 3, "jumlah_seri" => 1, "jumlah_kalah" => 0, "jumlah_poin" => 10],
        ["nama_negara" => "Negara B", "jumlah_menang" => 2, "jumlah_seri" => 2, "jumlah_kalah" => 0, "jumlah_poin" => 8],
        ["nama_negara" => "Negara C", "jumlah_menang" => 1, "jumlah_seri" => 2, "jumlah_kalah" => 1, "jumlah_poin" => 5],
        ["nama_negara" => "Negara D", "jumlah_menang" => 0, "jumlah_seri" => 1, "jumlah_kalah" => 3, "jumlah_poin" => 1]
    ];
    ?>
    <table>
        <tr>
            <th>Nama Negara</th>
            <th>Jumlah Menang</th>
            <th>Jumlah Seri</th>
            <th>Jumlah Kalah</th>
            <th>Jumlah Poin</th>
        </tr>
        <?php foreach ($standings as $row): ?>
        <tr>
            <td><?php echo $row["nama_negara"]; ?></td>
            <td><?php echo $row["jumlah_menang"]; ?></td>
            <td><?php echo $row["jumlah_seri"]; ?></td>
            <td><?php echo $row["jumlah_kalah"]; ?></td>
            <td><?php echo $row["jumlah_poin"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
