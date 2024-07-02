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
    
    <!-- Tabel Grup -->
    <h3>Grup</h3>
    <table>
        <tr>
            <th>Nama Grup</th>
            <th>Aksi</th>
        </tr>
        <?php
        // Koneksi ke database
        $servername = "localhost";
        $username = "root"; // Ganti dengan username MySQL Anda
        $password = ""; // Ganti dengan password MySQL Anda
        $dbname = "dblogineuro"; // Ganti dengan nama database Anda

        // Membuat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Koneksi ke database gagal: " . $conn->connect_error);
        }

        // Query SQL untuk mengambil data grup
        $sql = "SELECT id, nama_grup FROM grup_uefa";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["nama_grup"]. "</td>
                        <td><a href='klasmen.php?grup_id=" . $row["id"] . "'>Lihat Klasemen</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Tidak ada grup tersedia</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
