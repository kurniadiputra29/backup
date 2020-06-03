<html>
	<head>
		<title>Input Data</title>
		
	</head>
	<body>
	<form action="proses_input2.php" method="POST">
		<table>
		<tr>
			<td><label for="nama">Nama Siswa</label></td>
			<td>:</td>
			<td><input type="text" name="nama" id="nama"></td>
		</tr>			
		<tr>	
			<td><label for="kelas">Kelas</label></td>
			<td>:</td>
			<td>
				<select name="kelas" id="kelas">
				<option value="1a">1a</option>
				<option value="1b">1b</option>
				<option value="2a">2a</option>
				<option value="2b">2b</option>
				<option value="3a">3a</option>
				<option value="3b">3b</option>
				<option value="3c">3c</option>
				<option value="3d">3d</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label for="pelajaran">Pelajaran</label></td>
			<td>:</td>
			<td>
				<select name="pelajaran" id="pelajaran">
				<option value="javascript">Javascript</option>
				<option value="php">PHP</option>
				<option value="desain">Desain</option>				
				<option value="database">Database</option>
				</select>			
			</td>
		</tr>
		<tr>	
			<td><label for="nilai">Nilai</td>
			<td>:</td>
			<td><input type="text" name="nilai" id="nilai"></td>
		</tr>
		<tr>
			<td></td><td></td><td><input type="submit" value="Submit"></td>
		</tr>		
		</table>	
	</form>
	</body>
</html>
