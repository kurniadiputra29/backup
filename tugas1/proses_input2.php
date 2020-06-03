<?php
include 'koneksi3.php';
$nama          = $_POST['nama'];
$kelas         = $_POST['kelas'];
$pelajaran     = $_POST['pelajaran'];
$nilai	       = $_POST['nilai'];

$sql = "insert into nilai (nama_siswa, kelas, pelajaran, nilai) values ('$nama','$kelas','$pelajaran','$nilai')";
mysqli_query($connect,$sql);
header('location:index2.php');//untuk mengembalikan index.php
?>
