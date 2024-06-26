<?php
// Mulai session (jika diperlukan)
session_start();

// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "dbroti");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Proses pendaftaran
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form pendaftaran
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Escape user inputs untuk menghindari SQL Injection
    $username = $koneksi->real_escape_string($username);
    $password = $koneksi->real_escape_string($password);


    $query = "INSERT INTO tbluser (username, password) VALUES ('$username', '$password')";

    if ($koneksi->query($query) === TRUE) {
        // Jika pendaftaran berhasil, arahkan pengguna ke halaman login
        echo "<script>alert('Pendaftaran berhasil! Silakan login.');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
        exit();
    } else {
        // Jika terjadi kesalahan saat memasukkan data
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}

// Tutup koneksi database
$koneksi->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: rgb(73, 0, 128); 
        }   
        .container {
            display: flex;
            width: 430px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            text-align: center;
        }
        .image-container {
            flex: 1;
        }
        .form-container {
            flex: 4;
            position: relative; /* tambahkan posisi relatif untuk mengontrol posisi teks */
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type="text"], input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #b92f2f;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #b92f2f;
        }
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 15px; 
        }
        .text-beside-image {
            text-align: left;
            padding-left: 15px;
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }
        .register-link {
            text-decoration: none;
            color: #333;
            font-size: 14px;
            margin-top: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="https://i.pinimg.com/originals/eb/98/eb/eb98eb470d3b955a2f3910833b68ac8f.png" alt="Login" width="150">
        </div>
        <div class="form-container">
            <div class="text-beside-image">DAFTAR</div>
            <form action="daftar.php" method="post">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-group">
                    <input type="submit" value="Daftar">
                </div>
            </form>
            <div class="form-group">
                <a href="login.php" style="text-decoration: none; color: #333;">Kembali </a>
            </div>
        </div>
    </div>
</body>
</html>
