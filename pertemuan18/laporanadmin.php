<?php
session_start();

// Untuk menangani logout
if(isset($_GET['logout'])) {
    header("Location: login.html");
    exit; 
}

// URL atau path ke gambar
$imagePath = "https://i.pinimg.com/originals/eb/98/eb/eb98eb470d3b955a2f3910833b68ac8f.png";
$imageWidth = 120;
$imageHeight = 60;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pesanan Hari Ini</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .top-left-container {
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgb(73, 0, 128);
            width: 100%;
            height: 70px;
            display: flex;
            align-items: center;
            padding-left: 10px;
        }
        .top-left-container img {
            margin-right: 20px;
        }
        .top-left-text {
            color: white;
            font-size: 18px;
            font-weight: bold;
        }
        .navbar {
            margin-top: 70px;
            width: 100%;
            background-color: black;
            overflow: hidden;
            position: relative;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .submenu {
            display: block;
            background-color: purple;
            color: white;
            position: absolute;
            left: 0;
            width: 10%;
            height: 100%;
            z-index: 1;
        }
        .submenu a {
            display: block;
            padding: 14px 20px;
            text-decoration: none;
            color: white;
        }
        .submenu a:hover {
            background-color: #ddd;
            color: black;
        }
        .info-container {
            width: 70%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .info-container h2 {
            margin-bottom: 20px;
            color: rgb(73, 0, 128);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: rgb(73, 0, 128);
            color: white;
        }
    </style>
</head>
<body>

<div class="top-left-container">
    <img src="<?php echo $imagePath; ?>" alt="Gambar di Kiri Atas" width="<?php echo $imageWidth; ?>" height="<?php echo $imageHeight; ?>">
    <span class="top-left-text">ROTI LEZAT</span>
</div>

<div class="navbar">
    <a href="#Pilihanrasa">Pesanan Roti</a>
</div>

<div class="submenu">
    <a href="halamanadmin.php">Halaman Utama Admin</a>
    <a href="?logout=true">Logout</a>
</div>

<div class="info-container">
    <h2>Laporan Pesanan Hari Ini</h2>

    <table>
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Roti</th>
                <th>Jumlah</th>
                <th>Alamat Pengiriman</th>
                <th>Nomor Telepon</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Memeriksa apakah ada pesanan yang tersimpan di session
            if (isset($_SESSION['orders']) && !empty($_SESSION['orders'])) {
                // Loop untuk menampilkan setiap pesanan
                foreach ($_SESSION['orders'] as $key => $order) {
                    echo "<tr>";
                    echo "<td>" . ($key + 1) . "</td>";
                    echo "<td>" . htmlspecialchars($order['roti']) . "</td>";
                    echo "<td>" . htmlspecialchars($order['jumlah']) . " buah</td>";
                    echo "<td>" . htmlspecialchars($order['alamat']) . "</td>";
                    echo "<td>" . htmlspecialchars($order['telepon']) . "</td>";
                    echo "<td>" . htmlspecialchars($order['tanggal']) . "</td>";
                    echo "</tr>";
                }
            } else {
                // Jika tidak ada pesanan
                echo "<tr><td colspan='6'>Belum ada pesanan hari ini.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
