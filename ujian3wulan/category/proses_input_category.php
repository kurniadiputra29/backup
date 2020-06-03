<?php
include '../koneksi.php';
$nama = $_POST['nama'];

$sql = "INSERT INTO category (name) VALUES ('$nama')";
mysqli_query($connect,$sql);
header('location:index_category.php');
?>
