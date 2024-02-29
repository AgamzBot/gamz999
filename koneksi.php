<?php
// Konfigurasi koneksi
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_dashboard";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "Koneksi berhasil";
?>
