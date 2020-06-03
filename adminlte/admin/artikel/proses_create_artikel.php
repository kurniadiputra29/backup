<?php
//UNTUK MENJAGA FIELD KITA, JIKA BELUM LOGIN
session_start(); // itu di simpan di browser, bukan di mysql, maupun phpmyadmin
if (isset($_SESSION['email'])) { // perbedaan isset dan empti adalah isset untuk mengecek data, 

include '../../config/koneksi.php';
echo $title = $_POST['title'];
echo $isi = $_POST['isi'];

echo $nama_gambar = $_FILES['gambar']['name'];
echo $tmp_name = $_FILES['gambar']['tmp_name'];

echo $status = $_POST['status'];
echo $kategori = $_POST['kategori'];
echo $rilis = date('Y-m-d');
echo $user = $_SESSION['id'];

$nama_baru = round(microtime(true)). '.jpg' . end($nama_gambar);//fungsi untuk membuat nama acak
move_uploaded_file($tmp_name, "../../gambar/". $nama_baru);


//move_uploaded_file($tmp_name, "../../gambar/".$nama_gambar);
	// Apabila gambar tidak diisi
	if (empty($nama_gambar)){
	    $sql = "INSERT INTO article (title, isi, user_id, status, kategori_id, rilis) VALUES ('$title', '$isi', '$user', '$status', '$kategori', '$rilis')";
	    mysqli_query($koneksi,$sql);
		header('location:index.php');
	}else{
	    $sql = "INSERT INTO article (title, isi, user_id, gambar, status, kategori_id, rilis) VALUES ('$title', '$isi', '$user', '$nama_baru', '$status', '$kategori', '$rilis')";
	    mysqli_query($koneksi,$sql);
		header('location:index.php');
	}

}  else{
    echo "Anda Belum Login, silahkan <a href='../../index.php'>login</a>";
    }
?>
