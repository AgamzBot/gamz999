<?php
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];

include("koneksi.php");
$query_update = $koneksi->query("UPDATE db_siswa SET 
                                            nama='$nama',
                                            kelas='$kelas',
                                            alamat='$alamat'
                                            WHERE id='$id'
                                            ");
if ($query_update) {
?>
    <script>
        window.alert('Data Berhasil Diedit!!');
        window.location.href = 'index.php?page=dashboard';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Diedit!!');
        window.location.href = 'index.php?page=siswa-edit';
    </script>
<?php } ?>