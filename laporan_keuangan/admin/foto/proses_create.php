<?php
//UNTUK MENJAGA FIELD KITA, JIKA BELUM LOGIN
session_start(); // itu di simpan di browser, bukan di mysql, maupun phpmyadmin
if (isset($_SESSION['email'])) { // perbedaan isset dan empti adalah isset untuk mengecek data, 

include '../../config/koneksi.php';
echo $nama = $_POST['nama'];
echo $keterangan = $_POST['keterangan'];
echo $nama_gambar = $_FILES['foto']['name'];
echo $tmp_name = $_FILES['foto']['tmp_name'];

$nama_baru = round(microtime(true)). '.jpg' . end($nama_gambar);
move_uploaded_file($tmp_name, "../foto_user/". $nama_baru);

$sql = "INSERT INTO foto (nama, foto, keterangan) VALUES ('$nama', '$nama_baru','$keterangan')";
mysqli_query($koneksi,$sql);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
      exit();

}  else{
    echo "Anda Belum Login, silahkan <a href='../index.php'>login</a>";
    }
?>
