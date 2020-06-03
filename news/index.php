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
		<a href="tambah.php">Tambah Data</a>
		<table>
			<tr>
				<td>No</td>
				<td>Judul</td>
				<td>Penulis</td>
				<td>Status</td>
				<td>Tanggal</td>
				<td></td>
			</tr>
			<?php
			include 'koneksi.php';
			$nomor  = 1;
			$sql    = "select * from news";
			$result = mysqli_query($connect,$sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$status = ($row['status']) ? 'AKTIF' : 'TIDAK AKTIF';
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['title']."</td>
						<td>".$row['author']."</td>
						<td>".$status."</td>
						<td>".date('d F Y',strtotime($row['tanggal']))."</td>
						<td>
							<a href='edit.php?id=".$row['id']."'>Edit</a>
							<a href='delete.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			?>
		</table>
	</body>
</html>