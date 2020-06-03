<?php 
//UNTUK MENJAGA FIELD KITA, JIKA BELUM LOGIN
session_start(); // itu di simpan di browser, bukan di mysql, maupun phpmyadmin
if (isset($_SESSION['email'])) { // perbedaan isset dan empti adalah isset untuk mengecek data,

	include '../../config/koneksi.php';
	$ID   = $_POST['id'];
	echo $title = $_POST['title'];
	echo $isi = $_POST['isi'];
	echo $nama_gambar = $_FILES['gambar']['name'];
	echo $tmp_name = $_FILES['gambar']['tmp_name'];

	echo $status = $_POST['status'];
	echo $kategori = $_POST['kategori'];
	echo $rilis = date('Y-m-d');
	echo $user = $_SESSION['id'];
	// Apabila gambar tidak diganti
	if (empty($nama_gambar)){
	    $sql = "UPDATE article SET 
	    					title       = '$title',
	    					isi         = '$isi',
	    					user_id     = '$user',
	    					status      = '$status',
	    					kategori_id = '$kategori',
	    					rilis       = '$rilis'
	                    WHERE id='$ID'";
	    mysqli_query($koneksi,$sql);
	 	header('location:index.php');
	}else{

		$sql1    = "SELECT gambar FROM article where id=$ID";
		$result1 = mysqli_query($koneksi,$sql1);
		$row1   = mysqli_fetch_assoc($result1);
		echo $img = $row1['gambar'];
		$gambar = "../../gambar/".$img;

		if (!unlink($gambar)) {
			echo ("Error deleting $gambar");
		} else {
			echo ("Deleted $img SUCCES");
		}
		$nama_baru = round(microtime(true)). '.jpg' . end($nama_gambar);//fungsi untuk membuat nama acak
		move_uploaded_file($tmp_name, "../../gambar/". $nama_baru);
	    //move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$nama_gambar);
	    $sql = "UPDATE article SET 
	    					title       = '$title',
	    					isi         = '$isi',
	    					user_id     = '$user',
	    					gambar      = '$nama_baru',
	    					status      = '$status',
	    					kategori_id = '$kategori',
	    					rilis       = '$rilis'
	                    WHERE id='$ID'";
	    mysqli_query($koneksi,$sql);
	 	header('location:index.php');
	}
}  else{
    echo "Anda Belum Login, silahkan <a href='../../index.php'>login</a>";
    }
?>