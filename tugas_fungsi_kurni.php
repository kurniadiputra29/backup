<!DOCTYPE html>
<html>
<head>
	<title> Tugas Fungsi </title>
</head>
<body>
	<?php 
	function love($nama,$jumlah){
		$no=1;
		/*for ($i = 1 ; $i <= $jumlah; $i++){ 
			echo "Rasa cintaku kepada <b>$nama</b> sebesar <b>$i</b>  Gunung Uhud <br>";
			echo "Rasa cintaku kepada "."<b>$nama</b> "." sebesar "." <b>$i</b> "."  Gunung Uhud <br>";
		}
		while ($no <= $jumlah) {
			echo "Rasa cintaku kepada <b>$nama</b> sebesar <b>$no</b>  Gunung Uhud <br>";
			$no++;
		}*/
		do{
			echo "Rasa cintaku kepada <b>$nama</b> sebesar <b>$no</b>  Gunung Uhud <br>";
			$no++;
		} while( $no <= $jumlah);
	}
	love("Tempe",20);
	?>
</body>
</html>