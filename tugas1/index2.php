<html>
	<head>
		<title>TUGAS TABEL NILAI</title>
	</head>
	<body>
		<a href="inputdata2.php">Input Data</a>
		<br>
		<br>
		<table border="1" cellpadding="10">
			<tr>
				<td>No</td>
				<td>Nama Siswa</td>
				<td>Kelas</td>
				<td>Pelajaran</td>
				<td>Nilai</td>
				<td></td>
			</tr>
			<?php
			include 'koneksi3.php';
			$nomor  = 1;
			$sql    = "select * from nilai";
			$result = mysqli_query($connect,$sql);// untuk menghubungkan databases melalui $connect dengan isinya melalui $sql
			if(mysqli_num_rows($result)>0){// jika nggak ada datanya maka while tidak di jalankan
				while ($row = mysqli_fetch_assoc($result)) {// untuk memunculkan dalam bentuk rapi, mengambil dan dijadikan erray associative
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['nama_siswa']."</td>
						<td>".$row['kelas']."</td>
						<td>".$row['pelajaran']."</td>
						<td>".$row['nilai']."</td>
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
