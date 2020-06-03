<?php 
//UNTUK MENJAGA FIELD KITA, JIKA BELUM LOGIN
session_start(); // itu di simpan di browser, bukan di mysql, maupun phpmyadmin
if (isset($_SESSION['email'])) { // perbedaan isset dan empti adalah isset untuk mengecek data,

	include '../../config/koneksi.php';
	echo $ID   			= $_POST['id']; 
	echo $name        	= $_POST['nama']; 
	echo $email       	= $_POST['email']; 
	echo $password    	= $_POST['password'];  

	// Apabila gambar tidak diganti
	if (empty($password)){
	    $sql = "UPDATE user SET 
	    					nama    = '$name',
	    					email    = '$email'
	                    WHERE id='$ID'";
	    mysqli_query($koneksi,$sql);
	 	header('location:index_user.php');
	}else{
		$sql = "UPDATE user SET 
	    					nama    = '$name',
	    					email    = '$email',
	    					password = '$password'
	                    WHERE id='$ID'";
	    mysqli_query($koneksi,$sql);
	 	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index_user.php">';
	 	      exit();
	}
}  else{
    echo "Anda Belum Login, silahkan <a href='../../index.php'>login</a>";
    }
?>