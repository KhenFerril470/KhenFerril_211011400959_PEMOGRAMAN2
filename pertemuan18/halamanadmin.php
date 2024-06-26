<?php
// Mulai session
session_start();

// Koneksi ke database (menggantikan 'nama_server', 'nama_pengguna', 'password', dan 'nama_database' dengan informasi yang sesuai)
$koneksi = new mysqli("localhost", "root", "", "dbroti");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Menangani logout
if (isset($_GET['logout'])) {
    // Hapus semua data session
    session_destroy();
    // Arahkan pengguna ke halaman login
    header("Location: login.html");
    exit(); // pastikan skrip berhenti setelah mengarahkan
}

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, arahkan ke halaman login
    header("Location: login.html");
    exit();
}

// URL atau path ke gambar
$imagePath = "https://i.pinimg.com/originals/eb/98/eb/eb98eb470d3b955a2f3910833b68ac8f.png"; 
$imageWidth = 120;
$imageHeight = 60; 

// URL atau path ke gambar bawah tabel
$bottomImagePath1 = "https://bisnisukm.com/uploads/2013/09/Roti-Bakar-Van-Java.jpg";
$bottomImagePath2 = "https://s.kaskus.id/images/2016/12/09/5312572_20161209102631.jpg"; 
$bottomImageWidth = 600;
$bottomImageHeight = 400;

// Variabel untuk menyimpan nama pengguna dari session
$namaPengguna = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>roti</title>
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
            background-color:black;
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
            position: relative;
        }
        .submenu a.dropdown-toggle::after {
            content: '\25BC'; /* kode untuk panah kebawah Unicode */
            display: inline-block;
            margin-left: 5px; /* jarak antara teks dan panah */
            transform: translateY(-25%);
            font-size: 0.8em; /* ukuran font panah */
        }
        .submenu a:hover::after {
            color: black;
        }
        .submenu .sub-menu {
            display: none;
            background-color: #333;
            padding-left: 20px;
        }
        .submenu .sub-menu a {
            padding: 10px;
            color: white;
            display: block;
            text-decoration: none;
        }
        .submenu .sub-menu a:hover {
            background-color: #555;
        }
        .welcome-msg {
            text-align: center; 
            padding: 20px; 
            background-color: #f0f0f0; 
            margin: 20px auto; 
            border: 1px solid #ccc; 
            border-radius: 8px;
            width: 80%; 
            max-width: 800px;
        }
        .welcome-msg p {
            text-align: center;
            margin-bottom: 10px;
        }
        .image-container {
            display: flex;
            justify-content: center;
            gap: 20px; /* Jarak antara gambar */
            margin-top: 20px;
        }
        .image-container img {
            width: 100%;
            max-width: 400px; /* Atur sesuai kebutuhan */
            height: auto;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="top-left-container">
    <img src="<?php echo $imagePath; ?>" alt="Gambar di Kiri Atas" width="<?php echo $imageWidth; ?>" height="<?php echo $imageHeight; ?>">
    <span class="top-left-text">ROTI LEZAT</span>
</div>

<div class="navbar">
    <a href="#Halaman awal">Halaman Utama Admin</a>
</div>

<div id="submenu" class="submenu">
    <a href="#menu roti" id="menurotiBtn" class="dropdown-toggle">Menu Roti</a> 
    <div class="sub-menu" id="menurotiSubMenu">
        <a href="laporanadmin.php">Pesanan Roti</a>
    </div>

    <a href="?logout=true">Logout</a>
</div>

<div class="welcome-msg">
    <h2>Selamat Datang, <?php echo htmlspecialchars($namaPengguna); ?>!</h2>
    <p>Roti Lezat adalah tempatnya roti roti terenak yang sudah teruji keenakannya</p>
    
    <div class="image-container">
        <img src="<?php echo $bottomImagePath1; ?>" alt="Gambar 1">
        <img src="<?php echo $bottomImagePath2; ?>" alt="Gambar 2">
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var menurotiBtn = document.getElementById('menurotiBtn');
        var menurotiSubMenu = document.getElementById('menurotiSubMenu');

        menurotiBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (menurotiSubMenu.style.display === 'none' || menurotiSubMenu.style.display === '') {
                menurotiSubMenu.style.display = 'block';
            } else {
                menurotiSubMenu.style.display = 'none';
            }
        });
    });
</script>

</body>
</html>
