<?php
include '../../config/koneksi.php';
$ID   = $_GET['id'];
$sql1    = "SELECT foto FROM foto where id=$ID";
$result1 = mysqli_query($koneksi,$sql1);
$row1   = mysqli_fetch_assoc($result1);
echo $img = $row1['foto'];
$foto = "../foto_user/".$img;

if (!unlink($foto))
{
	echo ("Error deleting $foto");
}
else
{
	echo ("Deleted $img SUCCES");
}
$sql = "DELETE FROM foto WHERE id = '$ID'";	
mysqli_query($koneksi,$sql);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
      exit();
?>