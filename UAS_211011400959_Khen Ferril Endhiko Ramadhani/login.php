<?php
// Mulai session
session_start();

// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "dblogineuro");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form login
    $nim = $_POST["nim"];
    $password = $_POST["password"];
    
    // Escape user inputs untuk menghindari SQL Injection
    $nim = $koneksi->real_escape_string($nim);
    $password = $koneksi->real_escape_string($password);

    // Lakukan query ke database untuk memeriksa kecocokan data login di tabel tbluser
    $query = "SELECT * FROM tbluser WHERE nim = '$nim' AND password = '$password'";
    $result = $koneksi->query($query);

    if ($result->num_rows == 1) {
        // Jika data sesuai, ambil informasi pengguna dari tbluser
        $row = $result->fetch_assoc();
        $user_id = $row['id'];
        $user_nim = $row['nim'];

        // Simpan informasi pengguna ke dalam session
        $_SESSION['user_id'] = $user_id;
        $_SESSION['nim'] = $user_nim;

        header("Location: index.php");
        exit();
    } else {
        // Jika data tidak sesuai, tampilkan pesan kesalahan dan arahkan pengguna kembali ke halaman login
        echo "<script>alert('NIM atau password salah');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
        exit();
    }
}

// Tutup koneksi database
$koneksi->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: blue; 
        }   
        .container {
            display: flex;
            width: 430px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: blue;
            text-align: center;
        }
        .form-container {
            flex: 1;
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
        .form-links {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="text-beside-image">Login mahasiswa</div>
            <form action="login.php" method="post">
                <div class="form-group">
                    <input type="text" name="nim" placeholder="NIM" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Login">
                </div>
            </form>
            <div class="form-links">
            </div>
        </div>
    </div>
</body>
</html>
