<?php
session_start();

// Untuk menangani logout
if(isset($_GET['logout'])) {
    header("Location: login.html");
    exit; 
}

$data = json_decode(file_get_contents('data.json'), true);

// URL atau path ke gambar
$imagePath = "https://i.pinimg.com/originals/eb/98/eb/eb98eb470d3b955a2f3910833b68ac8f.png";
$imageWidth = 120;
$imageHeight = 60;

// Inisialisasi variabel untuk pesan
$pesanError = '';

// Memproses form jika ada pengiriman
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memvalidasi input yang dikirimkan
    $itemPilihan = $_POST['item'];
    $jumlahPesan = $_POST['jumlah'];
    $alamat = $_POST['alamat'];
    $nomorTelepon = $_POST['nomor_telepon'];

    if (array_key_exists($itemPilihan, $data) && $jumlahPesan > 0) {
        // Menyimpan informasi pesanan ke dalam sesi
        $newOrder = [
            'roti' => "Roti $itemPilihan - Rp " . $data[$itemPilihan],
            'jumlah' => $jumlahPesan,
            'alamat' => $alamat,
            'telepon' => $nomorTelepon,
            'tanggal' => date('Y-m-d')
        ];

        // Menambahkan pesanan baru ke dalam session orders
        if (!isset($_SESSION['orders'])) {
            $_SESSION['orders'] = [];
        }
        $_SESSION['orders'][] = $newOrder;

        // Redirect ke pilihanrasa.php setelah pesanan berhasil dibuat
        header("Location: pilihanrasa.php");
        exit;
    } else {
        $pesanError = "Pilihan roti tidak valid atau jumlah pesanan tidak valid.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Roti</title>
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
        .form-container {
            width: 70%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-bottom: 20px;
            color: rgb(73, 0, 128);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group select, .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
        .error-message {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="top-left-container">
    <img src="<?php echo $imagePath; ?>" alt="Gambar di Kiri Atas" width="<?php echo $imageWidth; ?>" height="<?php echo $imageHeight; ?>">
    <span class="top-left-text">ROTI LEZAT</span>
</div>

<div class="navbar">
    <a href="#Pilihanrasa">Pesan Roti</a>
</div>

<div class="submenu">
    <a href="awal.php">Halaman Utama</a>
    <a href="pilihanrasa.php">Pilihan Rasa</a>
    <a href="pesanan.php">Pesanan</a>
    <a href="?logout=true">Logout</a>
</div>

<div class="form-container">
    <h2>Pesan Roti</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="item">Pilih Roti:</label>
            <select id="item" name="item">
                <option value="">Pilih Roti...</option>
                <?php foreach ($data as $item => $harga): ?>
                    <option value="<?php echo htmlspecialchars($item); ?>"><?php echo htmlspecialchars($item); ?> - Rp <?php echo htmlspecialchars($harga); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" id="jumlah" name="jumlah" min="1" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat Pengiriman:</label>
            <input type="text" id="alamat" name="alamat" required>
        </div>

        <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="text" id="nomor_telepon" name="nomor_telepon" required>
        </div>

        <div style="text-align: center;">
            <button type="submit">Pesan Sekarang</button>
        </div>
    </form>

    <?php if ($pesanError): ?>
        <div class="error-message"><?php echo $pesanError; ?></div>
    <?php endif; ?>
</div>

</body>
</html>
