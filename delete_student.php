<?php
include "koneksi.php";

// Mengambil data siswa dari database
$sql = "SELECT * FROM db_siswa";
$result = $conn->query($sql);

// Menampilkan data siswa dalam format tabel HTML
if ($result->num_rows > 0) {
    echo "<table id='studentTable' border='1'>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["nama"]. "</td>
                <td>" . $row["kelas"]. "</td>
                <td>" . $row["alamat"]. "</td>
                <td><button onclick='deleteStudent(\"" . $row["id"] . "\")'>Delete</button></td>
                <td><button type='button' onclick='showEditForm(\"" . $row["nisn_siswa"] . "\", \"" . $row["nama_siswa"] . "\", \"" . $row["kelas_siswa"] . "\", \"" . $row["jurusan_siswa"] . "\", \"" . $row["pweb"] . "\", \"" . $row["pkk"] . "\", \"" . $row["basis_data"] . "\", \"" . $row["pbo"] . "\")'>Edit</button></td>;
              </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}
$conn->close();
?>
