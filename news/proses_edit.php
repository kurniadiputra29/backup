<?php
include 'koneksi.php';
$ID         = $_POST['id'];
$title 		= $_POST['judul'];
$content    = $_POST['isi_berita'];
$status 	= $_POST['status'];
$author     = $_POST['penulis'];
$tanggal    = date('Y-m-d');

$sql = "UPDATE news SET title = '$title', content = '$content', status = '$status', author = '$author', tanggal = '$tanggal' WHERE id = '$ID'";
mysqli_query($connect,$sql);

header('location:index.php');
?>