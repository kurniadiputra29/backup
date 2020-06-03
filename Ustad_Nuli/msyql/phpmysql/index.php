<table>
	<tr>
		<th>NO</th>
		<th>Nama</th>
		<th>Tempat Lahir</th>
		<th>Email</th>
		<th>Alamat Asal</th>
		<th>Action</th>
	
	</tr>
<?php
 include 'koneksi.php';
$nomor=1;
$data=mysqli_query($koneksi, "select * from santri");
	while ($row=mysqli_fetch_assoc($data)) {
	echo "
	<tr>
		<td>".$nomor++."</td>
		<td>".$row['nama']."</td>
		<td>".$row['tanggal_lahir']."</td>
		<td>".$row['email']."</td>
		<td>".$row['asal']."</td>
		<td>
			<a href = 'edit.php?id=".$row['id']."'>Edit</a> |
			<a href = 'hapus.php?id=".$row['id']."'>Hapus</a> 
		</td>
	</tr>
	";
}
?>
</table>
