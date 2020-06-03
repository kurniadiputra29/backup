<html>
	<head>
		<title>Data News</title>
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
		<h3>Edit News</h3>
		<form action="proses_edit.php" method="POST">
			<?php
			include 'koneksi.php';
			$ID     = $_GET['id'];
			$sql    = "SELECT * FROM news WHERE id=$ID";
			$result = mysqli_query($connect,$sql);
			$row    = mysqli_fetch_assoc($result);
			?>
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			<table>
				<tr>
					<td>Judul Berita</td>
					<td><input type="text" name="judul" value="<?php echo $row['title']; ?>"></td>
				</tr>
				<tr>
					<td>Isi Berita</td>
					<td><textarea name="isi_berita" rows="20" cols="50"><?php echo $row['content']; ?></textarea></td>
				</tr>
				<tr>
					<td>Nama Penulis</td>
					<td><input type="text" name="penulis" value="<?php echo $row['author']; ?>"></td>
				</tr>
				<tr>
					<td>Status Berita</td>
					<td>
						<input type="radio" name="status" value="1" <?php echo ($row['status']==1)?'checked':''; ?> > AKTIF<br>
						<input type="radio" name="status" value="0" <?php echo ($row['status']==0)?'checked':''; ?> > TIDAK AKTIF<br>
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