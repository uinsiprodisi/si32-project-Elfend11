<?php

$servername ="localhost";
$database ="UINSI_2441919009";
$username ="root";
$password ="";

// Buat koneksi database
$conn = mysqli_connect($servername, $username, $password, $database);

// cek koneksi

if (!$conn) {
    die("koneksi gagal".mysqli_connect_error());
}

echo "koneksi berhasil";
// mysql_closed
?>