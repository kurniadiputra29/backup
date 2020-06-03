<html>
	<head>
		<title>TUGAS TABEL NILAI</title>
	</head>
	<body>
		<a href="entri4.php">Input Data</a>
		<br>
		<br>
		<table border="1" cellpadding="10">
			<tr>
				<th>No</th>
				<th>Nama Siswa</th>
				<th>Kelas</th>
				<th>Mata Pelajaran</th>
				<th>Nilai</th>
			</tr>
			<?php
			include 'koneksi4.php';
			$nomor  = 1;
			$sql    = "SELECT siswa.nama AS siswa_id,kelas.nama AS kelas_id,mata_pelajaran.nama AS mapel_id,nilai.value
								FROM nilai 
								INNER JOIN siswa ON siswa.id=nilai.siswa_id
								INNER JOIN kelas ON kelas.id=nilai.kelas_id
								INNER JOIN mata_pelajaran ON mata_pelajaran.id=nilai.mapel_id;";
			$result = mysqli_query($connect,$sql);// untuk menghubungkan databases melalui $connect dengan isinya melalui $sql
			function jika($m){		
			if ($m==1){
				return "Aktif";			
			} else {
				return "Tidak Aktif";
			}
			};
			if(mysqli_num_rows($result)>0){// jika nggak ada datanya maka while tidak di jalankan
				while ($row = mysqli_fetch_assoc($result)) {// untuk memunculkan dalam bentuk rapi, mengambil dan dijadikan erray associative
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['siswa_id']."</td>
						<td>".$row['kelas_id']."</td>
						<td>".$row['mapel_id']."</td>
						<td>".$row['value']."</td>
					</tr>
					";
				}
			}
			?>
		</table>
	</body>
</html>
