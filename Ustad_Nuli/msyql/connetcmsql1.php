<?php
$server="localhost";// bisa menggunakan variabel
$sql=mysqli_connect("$server", "root", "123", "latihan");

if (!$sql){// fungsi ! berarti tidak atau bukan (false / true)
	die ("gagal konek:");//untuk cek koneksi
}else{
	echo "koneksi berhasil";
}
// echo hello;
?>
