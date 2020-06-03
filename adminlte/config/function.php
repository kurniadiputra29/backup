<?php
include 'koneksi.php';

function user($id){
global $koneksi;
            
            $sql    = "select * from user where id=$id";
            $result = mysqli_query($koneksi,$sql);
            $row    = mysqli_fetch_assoc($result);
            return $row['name'];
}
function kategori($id){
global $koneksi;
            $sql    = "select * from kategori where id=$id";
            $result = mysqli_query($koneksi,$sql);
            $row    = mysqli_fetch_assoc($result);
            return  $row['nama'];
}
function status($id){
	if ($id == "1"){
		return "<b style='color:#173679;'> Aktif </b>";
	}	else {
		return "<b style='color:#d92626;'> Tidak Aktif </b>";
	}
}
?>