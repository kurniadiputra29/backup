<?php
include 'koneksi3.php';
$induk         = $_POST['induk'];
$nama          = $_POST['nama'];
$birth_date		 = $_POST['birth_date'];
$email         = $_POST['email'];
$status        = $_POST['status'];

$sql = "insert into siswa (induk, nama, birth_date, email, status) values ('$induk','$nama','$birth_date','$email','$status ')";
mysqli_query($connect,$sql);
header('location:index3.php');//untuk mengembalikan index.php
?>
