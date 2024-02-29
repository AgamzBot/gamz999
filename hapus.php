<?php
include("koneksi.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM db_siswa WHERE id = $id";

    if($conn->query($query)===True){
        header("location:dashboard.php");
    }else{
        echo"error".$query."<br>". $conn->error;

    }

    $conn->close();
}