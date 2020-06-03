<?php
include 'koneksi4.php';
$nama        = $_POST['nama'];
$kelas       = $_POST['kelas'];
$mapel			 = $_POST['mapel'];
$nilai       = $_POST['nilai'];


$sql = "insert into nilai (siswa_id, kelas_id, mapel_id, value) values ('$nama','$kelas','$mapel','$nilai')";
mysqli_query($connect,$sql);
header('location:index4.php');//untuk mengembalikan index.php
?>
