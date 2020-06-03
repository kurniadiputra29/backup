<html>
	<head>
		<title>TUGAS TABEL NILAI</title>
	</head>
	<body>
		<a href="entri2.php">Input Data</a>
		<br>
		<br>
		<table border="1" cellpadding="10">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Pengajar</th>
				<th>Status</th>
			</tr>
			<?php
			include 'koneksi2.php';
			$nomor  = 1;
			$sql    = "select * from mata_pelajaran";
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
						<td>".$row['nama']."</td>
						<td>".$row['pengajar']."</td>
						<td>".jika($row['status'])."</td>
					</tr>
					";
				}
			}
			?>
		</table>
	</body>
</html>
