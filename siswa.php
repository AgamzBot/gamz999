<?php
// Cek apakah permintaan POST telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nama = $_POST['name'];
    $kelas = $_POST['class'];
    $alamat = $_POST['address'];

    // Validasi data
    if (empty($nama) || empty($kelas) || empty($alamat)) {
        echo "Mohon lengkapi semua kolom.";
    } else {
        // Buat koneksi ke database
        $conn = new mysqli("localhost", "root", "", "db_dashboard");

        // Periksa koneksi
        if ($conn->connect_error) {
            die("Koneksi database gagal: " . $conn->connect_error);
        }

        // Siapkan query untuk menambahkan siswa ke database
        $sql = "INSERT INTO db_siswa (Nama, Kelas, Alamat) VALUES ('$nama', '$kelas', '$alamat')";

        // Jalankan query
        if ($conn->query($sql) === TRUE) {
            header("location: dashboard.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Tutup koneksi ke database
        $conn->close();
    }
}
?>
