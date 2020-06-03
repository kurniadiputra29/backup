<table>
	<tr>
		<th>no</th>	
		<th>merk</th>
		<th>tipe</th>
	</tr>
<?php
include 'koneksi.php';
$nomor=1;
$data= mysqli_query($konection, "select * from hardware ");
	while($row=mysqli_fetch_assoc($data)) {
	echo"		
	<tr>
		<td>".$row['id']."</td>
		<td>".$row['merk']."</td>
		<td>".$row['type']."</td>
	</tr>
";
}
?>
</table>
