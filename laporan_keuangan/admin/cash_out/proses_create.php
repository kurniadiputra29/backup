<?php
//UNTUK MENJAGA FIELD KITA, JIKA BELUM LOGIN
session_start(); // itu di simpan di browser, bukan di mysql, maupun phpmyadmin
if (isset($_SESSION['email'])) { // perbedaan isset dan empti adalah isset untuk mengecek data, 

include '../../config/koneksi.php';
echo $tanggal = $_POST['tanggal'];
echo $jumlah = $_POST['jumlah'];
echo $keterangan = $_POST['keterangan'];
echo $user = $_SESSION['email'];

$sql = "INSERT INTO cash_out (tanggal, jumlah, keterangan, user) VALUES ('$tanggal', '$jumlah', '$keterangan', '$user')";
mysqli_query($koneksi,$sql);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
      	exit();
}  else{
    echo "Anda Belum Login, silahkan <a href='../index.php'>login</a>";
    }
?>
