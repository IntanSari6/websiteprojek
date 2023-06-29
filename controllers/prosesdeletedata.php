<?php

$id = $_GET['id'];

include '../connect.php';

$query = mysqli_query($connect, "DELETE FROM siswa WHERE id=$id");

if($query){
    echo "<script>alert('Data berhasil dihapus'); window.location.href = '../index.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus'); window.location.href = '../index.php';</script>";
}
?>