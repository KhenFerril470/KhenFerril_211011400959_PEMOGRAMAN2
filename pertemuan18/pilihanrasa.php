<?php
// Untuk menangani logout
if(isset($_GET['logout'])) {
    // Jika pengguna mengklik tautan logout, arahkan ke halaman login.html
    header("Location: login.html");
    exit; // pastikan skrip berhenti setelah mengarahkan
}

// Memuat data stok barang dari file data.json
$data = json_decode(file_get_contents('data.json'), true);

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
    <title>Roti Lezat</title>
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
        table {
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

    
    
    </style>
</head>
<body>

<div class="top-left-container">
    <img src="<?php echo $imagePath; ?>" alt="Gambar di Kiri Atas" width="<?php echo $imageWidth; ?>" height="<?php echo $imageHeight; ?>">
    <span class="top-left-text">ROTI LEZAT</span>
</div>

<div class="navbar">
    <a href="#Pilihanrasa">Pilihan Rasa</a>
</div>

<div id="submenu" class="submenu">
    <a href="awal.php">Halaman Utama</a>
    <a href="pesan.php">Pesan Roti</a>
    <a href="?logout=true">Logout</a>
</div>

<table>
    <thead>
        <tr>
            <th>Pilihan rasa</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item => $stock): ?>
        <tr>
            <td><?php echo htmlspecialchars($item); ?></td>
            <td><?php echo htmlspecialchars($stock); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>



</body>
</html>
