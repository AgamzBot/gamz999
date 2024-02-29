<?php
$sql=mysqli_query($koneksi,"SELECT * FROM db_siswa WHERE id='$_GET[id]'");
$data=mysqli_fetch_array($sql);

?>
<form action="" method="post">
    <h2 class="mt-5 mb-4">Edit Siswa</h2>
    <table width="480px">
        <tr>
            <td width="120"> nama </td>
            <td> <input type="text" name="id" value="<?php echo $data['id']; ?>"> </td>
</tr>
            <tr>
               <td> Nama </td>
               <td> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
</tr>

<tr>
    <td>kelas</td>
    <td> <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"> </td>
</tr>

<tr>
    <td>alamat</td>
    <td> <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"> </td>
</tr>
                </form>
            </td>
        </tr>
    </table>
</form>
<?php
include ("koneksi.php");
 
if (isset($_POST['proses'])){
    mysqli_query($koneksi, "update db_siswa set
    nama = '$_POST[nama]',
    kelas = '$_POST[kelas]',
    alamat = '$_POST[alamat]'
    where id = '$GET[id]'"
);
}
?>