<?php
// Mulai session
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "dblogineuro");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Proses update data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $menang = $_POST['menang'];
    $seri = $_POST['seri'];
    $kalah = $_POST['kalah'];
    $poin = $_POST['poin'];

    $query = "UPDATE tblklasemen SET menang='$menang', seri='$seri', kalah='$kalah', poin='$poin' WHERE id='$id'";
    $koneksi->query($query);
}

// Proses reset data
if (isset($_GET['reset'])) {
    $id = $_GET['reset'];
    $query = "UPDATE tblklasemen SET menang=0, seri=0, kalah=0, poin=0 WHERE id='$id'";
    $koneksi->query($query);
}

// Ambil data dari tabel tblklasemen
$query = "SELECT * FROM tblklasemen";
$result = $koneksi->query($query);

// Tutup koneksi database
$koneksi->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Klasemen Grup B Euro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f0f0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: blue;
            color: white;
        }
        .form-container {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        input[type="text"], input[type="number"], select {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"], .btn-print, .btn-logout {
            width: 100%;
            background-color: black;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-bottom: 10px;
        }
        input[type="submit"]:hover, .btn-print:hover, .btn-logout:hover {
            background-color: #a52828;
        }
        .btn-delete {
            color: red;
            cursor: pointer;
        }
        @media print {
            .form-container, .btn-print, .btn-logout {
                display: none;
            }
        }
    </style>
</head>
<body>
    <h1>Klasemen Grup B Euro</h1>
    
    <!-- Tambahkan gambar di atas tabel menggunakan URL -->
    <div style="text-align: center; margin-bottom: 20px;">
        <img src="https://assets.uefa.tv.uicentric.net/images/tiles/EURO2024_circle_web_medium.png" alt="Euro Logo" width="200">
    </div>

    <table>
        <tr>
            <th>Negara</th>
            <th>Menang</th>
            <th>Seri</th>
            <th>Kalah</th>
            <th>Poin</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['negara']; ?></td>
            <td><?php echo $row['menang']; ?></td>
            <td><?php echo $row['seri']; ?></td>
            <td><?php echo $row['kalah']; ?></td>
            <td><?php echo $row['poin']; ?></td>
            <td>
                <a href="index.php?reset=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Anda yakin ingin mereset data ini?')">Reset</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <button class="btn-print" onclick="window.print()">Print</button>
    <button class="btn-logout" onclick="window.location.href='logout.php'">Logout</button>

    <div class="form-container">
        <h2>Update Data Klasemen</h2>
        <form action="index.php" method="post">
            <div class="form-group">
                <select name="id" required>
                    <option value="">Pilih Negara</option>
                    <?php
                    $koneksi = new mysqli("localhost", "root", "", "dblogineuro");
                    $query = "SELECT id, negara FROM tblklasemen";
                    $result = $koneksi->query($query);
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['negara'] . '</option>';
                    }
                    $koneksi->close();
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input type="number" name="menang" placeholder="Jumlah Menang" required>
            </div>
            <div class="form-group">
                <input type="number" name="seri" placeholder="Jumlah Seri" required>
            </div>
            <div class="form-group">
                <input type="number" name="kalah" placeholder="Jumlah Kalah" required>
            </div>
            <div class="form-group">
                <input type="number" name="poin" placeholder="Jumlah Poin" required>
            </div>
            <div class="form-group">
                <input type="submit" name="update" value="Update">
            </div>
        </form>
    </div>
</body>
</html>
