<?php
include '../../config/koneksi.php';
$ID   = $_GET['id'];

$sql = "DELETE FROM cash_in WHERE id = '$ID'";	
mysqli_query($koneksi,$sql);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
      	exit();
?>