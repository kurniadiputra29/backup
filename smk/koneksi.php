<?php
$nameserver ="localhost";
$username		="id7983590_root";
$password		="antok132";
$dbname			="id7983590_alumni_smk_muda";
// Create connection
$connect = mysqli_connect($nameserver,$username,$password,$dbname);
// Check connection

$sql1 = "CREATE TABLE ak1 (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama_siswa VARCHAR(50) NULL, 
tahun_lulus VARCHAR(50) NULL,
tempat_tanggal_lahir VARCHAR(100) NULL,
nis VARCHAR(50) NULL,
jurusan VARCHAR(50) NULL,
tempat_bekerja VARCHAR(50) NULL,
tempat_kuliah VARCHAR(50) NULL,
jurusan_kuliah VARCHAR(50) NULL,
bidang_usaha_pekerjaan VARCHAR(50) NULL,
penghasilan INT(11) NULL,
keterangan VARCHAR(100) NULL
)";
$sql2 = "CREATE TABLE ak2 (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama_siswa VARCHAR(50) NULL, 
tahun_lulus VARCHAR(50) NULL,
tempat_tanggal_lahir VARCHAR(100) NULL,
nis VARCHAR(50) NULL,
jurusan VARCHAR(50) NULL,
tempat_bekerja VARCHAR(50) NULL,
tempat_kuliah VARCHAR(50) NULL,
jurusan_kuliah VARCHAR(50) NULL,
bidang_usaha_pekerjaan VARCHAR(50) NULL,
penghasilan INT(11) NULL,
keterangan VARCHAR(100) NULL
)";
$sql3 = "CREATE TABLE ak3 (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
no_absen INT(11) NULL,
nama_siswa VARCHAR(50) NULL, 
tahun_lulus VARCHAR(50) NULL,
tempat_tanggal_lahir VARCHAR(100) NULL,
nis VARCHAR(50) NULL,
jurusan VARCHAR(50) NULL,
tempat_bekerja VARCHAR(50) NULL,
tempat_kuliah VARCHAR(50) NULL,
jurusan_kuliah VARCHAR(50) NULL,
bidang_usaha_pekerjaan VARCHAR(50) NULL,
penghasilan INT(11) NULL,
keterangan VARCHAR(100) NULL
)";
$sql4 = "CREATE TABLE ak4 (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama_siswa VARCHAR(50) NULL, 
tahun_lulus VARCHAR(50) NULL,
tempat_tanggal_lahir VARCHAR(100) NULL,
nis VARCHAR(50) NULL,
jurusan VARCHAR(50) NULL,
tempat_bekerja VARCHAR(50) NULL,
tempat_kuliah VARCHAR(50) NULL,
jurusan_kuliah VARCHAR(50) NULL,
bidang_usaha_pekerjaan VARCHAR(50) NULL,
penghasilan INT(11) NULL,
keterangan VARCHAR(100) NULL
)";
$sql5 = "CREATE TABLE tn1 (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama_siswa VARCHAR(50) NULL, 
tahun_lulus VARCHAR(50) NULL,
tempat_tanggal_lahir VARCHAR(100) NULL,
nis VARCHAR(50) NULL,
jurusan VARCHAR(50) NULL,
tempat_bekerja VARCHAR(50) NULL,
tempat_kuliah VARCHAR(50) NULL,
jurusan_kuliah VARCHAR(50) NULL,
bidang_usaha_pekerjaan VARCHAR(50) NULL,
penghasilan INT(11) NULL,
keterangan VARCHAR(100) NULL
)";
$sql6 = "CREATE TABLE tn2 (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama_siswa VARCHAR(50) NULL, 
tahun_lulus VARCHAR(50) NULL,
tempat_tanggal_lahir VARCHAR(100) NULL,
nis VARCHAR(50) NULL,
jurusan VARCHAR(50) NULL,
tempat_bekerja VARCHAR(50) NULL,
tempat_kuliah VARCHAR(50) NULL,
jurusan_kuliah VARCHAR(50) NULL,
bidang_usaha_pekerjaan VARCHAR(50) NULL,
penghasilan INT(11) NULL,
keterangan VARCHAR(100) NULL
)";
$sql7 = "CREATE TABLE tb (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama_siswa VARCHAR(50) NULL, 
tahun_lulus VARCHAR(50) NULL,
tempat_tanggal_lahir VARCHAR(100) NULL,
nis VARCHAR(50) NULL,
jurusan VARCHAR(50) NULL,
tempat_bekerja VARCHAR(50) NULL,
tempat_kuliah VARCHAR(50) NULL,
jurusan_kuliah VARCHAR(50) NULL,
bidang_usaha_pekerjaan VARCHAR(50) NULL,
penghasilan INT(11) NULL,
keterangan VARCHAR(100) NULL
)";
mysqli_query($connect, $sql1);
mysqli_query($connect, $sql2);
mysqli_query($connect, $sql3);
mysqli_query($connect, $sql4);
mysqli_query($connect, $sql5);
mysqli_query($connect, $sql6);
mysqli_query($connect, $sql7);
?>
