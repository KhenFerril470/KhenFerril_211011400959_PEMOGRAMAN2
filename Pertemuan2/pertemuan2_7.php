<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai dari input formulir
    $nmbrg = $_POST['nmbrg'];
    $hsbrg = $_POST['hsbrg'];
    $jmlbrg = $_POST['jmlbrg'];
    
    // Menghitung total harga barang
    $harga = $hsbrg * $jmlbrg;
    
    // Menampilkan informasi hasil perhitungan
    echo "Nama Barang: $nmbrg <br>";
    echo "Harga Satuan: Rp. $hsbrg <br>";
    echo "Jumlah barang: $jmlbrg <br>";
    echo "Total Harga Barang: Rp. $harga <br>";
}
?>
