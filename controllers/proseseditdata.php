<?php

$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$jurusan = $_POST['jurusan'];

include '../connect.php';

$query = mysqli_query($connect, "UPDATE siswa SET Nama='$nama', NIS='$nis', Jurusan='$jurusan' WHERE id=$id");

if($query){
    echo "<script>alert('Data Berhasil Di Edit'); window.location.href = '../index.php';</script>";
}else{
    echo "<script>alert('Data Berhasil Di Edit'); window.location.href = '../index.php';</script>";
}
?>