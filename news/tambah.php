<html>
	<head>
		<title>Tambah News</title>
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
		<style type="text/css">
		body {
			font-family: 'Source Sans Pro', sans-serif;
		}
		table {
			border: 1px solid black;
			border-collapse: collapse;
		}
		tr,td {
			border: 1px solid black;
			padding: 5px;
		}
		</style>
	</head>
	<body>
		<h3>Tambah News</h3>
		<form action="proses_tambah.php" method="POST">
			<table>
				<tr>
					<td>Judul Berita</td>
					<td><input type="text" name="judul"></td>
				</tr>
				<tr>
					<td>Isi Berita</td>
					<td><textarea name="isi_berita" rows="20" cols="50"></textarea></td>
				</tr>
				<tr>
					<td>Nama Penulis</td>
					<td><input type="text" name="penulis"></td>
				</tr>
				<tr>
					<td>Status Berita</td>
					<td>
						<input type="radio" name="status" value="1"> AKTIF<br>
						<input type="radio" name="status" value="0"> TIDAK AKTIF<br>
					</td>
				</tr>
				<tr>
					<td>
						<a href="index.php">Batal</a>
					</td>
					<td>
				      	<button type="submit">Submit</button>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>