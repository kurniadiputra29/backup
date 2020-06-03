<html>
	<head>
		<title>TUGAS TABEL NILAI</title>
	</head>
	<body>
		<a href="entri3.php">Input Data</a>
		<br>
		<br>
		<table border="1" cellpadding="10">
			<tr>
				<th>No</th>
				<th>Induk</th>
				<th>Nama Siswa</th>
				<th>Birth Date</th>
				<th>Email</th>
				<th>Status</th>
			</tr>
			<?php
			include 'koneksi3.php';
			$nomor  = 1;
			$sql    = "select * from siswa";
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
						<td>".$row['induk']."</td>
						<td>".$row['nama']."</td>
						<td>".$row['birth_date']."</td>
						<td>".$row['email']."</td>
						<td>".jika($row['status'])."</td>
					</tr>
					";
				}
			}
			?>
		</table>
	</body>
</html>
