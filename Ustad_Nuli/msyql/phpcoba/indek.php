<table>
	<tr>
		<th>NO</th>
		<th>Nama</th>
		<th>Tempat Lahir</th>
		<th>Email</th>
	</tr>
<?php
 include 'koneksi.php';
$nomor=1;
$data=mysqli_query($koneksi, "select * from coba");
	while ($row=mysqli_fetch_assoc($data)) {
	echo "
	<tr>
		<td>".$nomor++."</td>
		<td>".$row['nama']."</td>
		<td>".$row['tempat_lahir']."</td>
		<td>".$row['email']."</td>
	</tr>
	";
}
?>
</table>
