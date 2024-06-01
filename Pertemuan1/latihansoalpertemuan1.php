<?php
// Variabel untuk menyimpan kesan pertama kali belajar PHP
$kesan = "Belajar PHP pertama kali sangat menyenangkan! Meskipun ada banyak hal yang perlu dipelajari, saya merasa termotivasi untuk terus belajar dan mengembangkan keterampilan saya. PHP memungkinkan saya untuk membuat halaman web dinamis dan interaktif dengan mudah.";

// HTML yang di-embed dalam PHP untuk tampilan
echo "<!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'>
    <title>Kesan Pertama Belajar PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 20px auto;
        }
        h1 {
            color: #007BFF;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Kesan Pertama Belajar PHP</h1>
        <p>$kesan</p>
    </div>
</body>
</html>";
?>
