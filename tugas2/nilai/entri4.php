<html>
	<head>
		<title>Input Data</title>
		
	</head>
	<body>
	<form action="proses_entri4.php" method="POST">
		<table>
		<tr>
			<td><label for="nama">Nama Siswa</label></td>
			<td>:</td>
			<td><input type="number" name="nama" id="nama" maxlength="30" required></td>
		</tr>	
		<tr>
			<td><label for="kelas">Kelas</label></td>
			<td>:</td>
			<td><input type="number" name="kelas" id="kelas"></td>
		</tr>
		<tr>
			<td><label for="mapel">Mata Pelajaran</label></td>
			<td>:</td>
			<td><input type="number" name="mapel" id="mapel" maxlength="30" required></td>
		</tr>				
		<tr>	
			<td><label for="nilai">Nilai</label></td>
			<td>:</td>
			<td><input type="number" name="nilai" id="nilai" ></td>
		</tr>
		<tr>
			<td></td><td></td><td><input type="submit" value="Submit"></td>
		</tr>		
		</table>	
	</form>
	</body>
</html>
