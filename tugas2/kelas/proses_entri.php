<?php
include 'koneksi1.php';
$nama          = $_POST['nama'];
$status       = $_POST['status'];

$sql = "insert into kelas (nama, status) values ('$nama','$status')";
mysqli_query($connect,$sql);
header('location:index1.php');//untuk mengembalikan index.php
?>
