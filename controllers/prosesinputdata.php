<?php

$nama = $_POST['nama'];
$nis = $_POST['nis'];
$jurusan = $_POST['jurusan'];

include '../connect.php';

$query = mysqli_query($connect, "INSERT INTO siswa VALUE('', '$nama', '$nis', '$jurusan')");

if($query){
    echo "<script>alert('Data berhasil diinputkan'); window.location.href = '../index.php';</script>";
}else{
    echo "<script>alert('Data gagal diinputkan'); window.location.href = '../index.php';</script>";
}
?>