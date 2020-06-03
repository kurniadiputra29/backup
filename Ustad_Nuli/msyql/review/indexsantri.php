<html>
<head><title></title>
<style type="text/css">
.head {
border: 2px solid;
border-color: aqua;
background: pink; 
}
.head tr th {
border: 2px solid;
border-color: aqua;
text-align: center;
padding: 10px 20px;
}
.head tr th:hover{
background: yellow;
}
.head tr td {
border: 2px solid;
border-color: aqua;
text-align: left;
padding: 5px 10px 5px 25px;
}
.head tr td:hover{
background: white;
cursor: pointer;
}

</style>
</head>
<body>
<table class="head">
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>ASAL</th>
		<th>GENDER</th>
	</tr>
<?php
 include ('koneksantri.php');
$nomor= 1;
$data= mysqli_query($koneksi, "select * from santri");
 while ($row=mysqli_fetch_assoc($data)) {
	echo"
	<tr>
		<td>".$row['No']."</td>
		<td>".$row['Nama']."</td>
		<td>".$row['Asal']."</td>
		<td>".$row['Gender']."</td>
	</tr>
";
}
?>
</table>


