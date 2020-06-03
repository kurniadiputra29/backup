<?php
include 'koneksi.php';
$title 		= $_POST['judul'];
$content    = $_POST['isi_berita'];
$status 	= $_POST['status'];
$author     = $_POST['penulis'];
$tanggal    = date('Y-m-d');

$sql = "insert into news (title, content, status, author, tanggal) values ('$title','$content','$status','$author','$tanggal')";
mysqli_query($connect,$sql);

header('location:index.php');
?>