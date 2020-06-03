<html>
	<head>
		<title>Input Data</title>
		
	</head>
	<body>
	<form action="proses_entri.php" method="POST">
		<table>
		<tr>
			<td><label for="nama">Nama Kelas</label></td>
			<td>:</td>
			<td><input type="text" name="nama" id="nama"></td>
		</tr>			
		<tr>	
			<td><label for="status">Status</label></td>
			<td>:</td>
			<td><input type="radio" name="status" id="status" value="1"/><label for="status">Aktif</label></td>
			<td><input type="radio" name="status" id="status" value="0"/><label for="status">Tidak Aktif</label></td>
		</tr>
		<tr>
			<td></td><td></td><td><input type="submit" value="Submit"></td>
		</tr>		
		</table>	
	</form>
	</body>
</html>
