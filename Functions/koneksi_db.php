<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "penjualan";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil";

// Operasi lainnya dapat dilakukan di sini

// Menutup koneksi
mysqli_close($conn);
?>

