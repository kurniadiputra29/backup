<html>
	<head>
		<title>Edit Data</title>

	</head>
	<body>
		<?php
		include 'koneksi3.php';
		$ID     = $_GET['id'];
		$sql    = "select * from nilai where id=$ID";
		$result = mysqli_query($connect,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>
		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?> " >
			Nama : <br>
			<input type="text" name="nama" value="<?php echo $row['nama_siswa']; ?>"disabled><br>
			Kelas : <br>
			<input type="text" name="kelas" value="<?php echo $row['kelas']; ?>"disabled><br>
			Pelajaran : <br>
				<select name="pelajaran" value="<?php echo $row['pelajaran']; ?>">
				<option value="javascript">Javascript</option>
				<option value="php">PHP</option>
				<option value="desain">Desain</option>				
				<option value="database">Database</option>
				</select><br>
			Nilai : <br>
			<input type="text" name="nilai" value="<?php echo $row['nilai']; ?>"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>

