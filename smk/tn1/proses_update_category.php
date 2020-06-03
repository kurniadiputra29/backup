<?php
include '../koneksi.php';
echo $ID   = $_POST['id'];
echo $nama_siswa 						= $_POST['nama_siswa'];
echo $tahun_lulus 						= $_POST['tahun_lulus'];
echo $tempat_tanggal_lahir 	= $_POST['tempat_tanggal_lahir'];
echo $nis										= $_POST['nis'];
echo $jurusan 								= $_POST['jurusan'];
echo $tempat_bekerja					= $_POST['tempat_bekerja'];
echo $tempat_kuliah					= $_POST['tempat_kuliah'];
echo $jurusan_kuliah 				= $_POST['jurusan_kuliah'];
echo $bidang_usaha_pekerjaan = $_POST['bidang_usaha_pekerjaan'];
echo $penghasilan						= $_POST['penghasilan'];
echo $keterangan 						= $_POST['keterangan'];
$kosong	= "-";
$nol = 0;
if ($nis==""){echo $nis = $kosong;}
if ($tempat_bekerja==""){echo $tempat_bekerja = $kosong;}
if ($tempat_kuliah==""){echo $tempat_kuliah = $kosong;}
if ($jurusan_kuliah==""){echo $jurusan_kuliah = $kosong;}
if ($bidang_usaha_pekerjaan==""){echo $bidang_usaha_pekerjaan = $kosong;}
if ($penghasilan==""){echo $penghasilan = $nol;}
if ($keterangan==""){echo $keterangan = $kosong;}
$sql = "UPDATE tn1 SET nama_siswa='$nama_siswa', tahun_lulus='$tahun_lulus', tempat_tanggal_lahir='$tempat_tanggal_lahir', nis='$nis', jurusan='$jurusan', tempat_bekerja='$tempat_bekerja', tempat_kuliah='$tempat_kuliah', jurusan_kuliah='$jurusan_kuliah', bidang_usaha_pekerjaan='$bidang_usaha_pekerjaan', penghasilan='$penghasilan', keterangan='$keterangan' WHERE id='$ID'";
mysqli_query($connect,$sql);
header('location:index_category.php');
?>
