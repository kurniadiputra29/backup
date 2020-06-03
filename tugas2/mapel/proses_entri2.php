<?php
include 'koneksi2.php';
$nama          = $_POST['nama'];
$pengajar			 = $_POST['pengajar'];
$status        = $_POST['status'];

$sql = "insert into mata_pelajaran (nama,pengajar,status) values ('$nama','$pengajar','$status')";
mysqli_query($connect,$sql);
header('location:index2.php');//untuk mengembalikan index.php
?>
