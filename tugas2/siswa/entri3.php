<html>
	<head>
		<title>Input Data</title>
		
	</head>
	<body>
	<form action="proses_entri3.php" method="POST">
		<table>
		<tr>
			<td><label for="induk">No. Induk</label></td>
			<td>:</td>
			<td><input type="number" name="induk" id="induk" maxlength="10" required></td>
		</tr>	
		<tr>
			<td><label for="nama">Nama Siswa</label></td>
			<td>:</td>
			<td><input type="text" name="nama" id="nama" maxlength="30" required></td>
		</tr>	
		<tr>
			<td><label for="birth_date">Birth Date</label></td>
			<td>:</td>
			<td><input type="date" name="birth_date" id="birth_date"></td>
		</tr>
		<tr>
			<td><label for="email">Email</label></td>
			<td>:</td>
			<td><input type="email" name="email" id="email" maxlength="30" required></td>
		</tr>				
		<tr>	
			<td><label for="status">Status</label></td>
			<td>:</td>
			<td><input type="radio" name="status" id="status1" value="1"/><label for="status1">Aktif</label></td>
			<td><input type="radio" name="status" id="status2" value="0"/><label for="status2">Tidak Aktif</label></td>
		</tr>
		<tr>
			<td></td><td></td><td><input type="submit" value="Submit"></td>
		</tr>		
		</table>	
	</form>
	</body>
</html>
