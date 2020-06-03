<!doctype html>
<html>
	<head>Multidimensional ARRAY <br>
		<title>PHP</title>
	</head>
	<body>
	<?php
	$motor = array
	(
	array("Suzuki",120,14),
	array("Honda",110,12),
	array("Yamaha",125,15),
	array("Kawasaki",150,20)
	);
	
	echo $motor[0][0].": CC : " .$motor[0][1].", Harga : ".$motor[0][2]." juta".".<br>";
	echo $motor[1][0].": CC : " .$motor[1][1].", Harga : ".$motor[1][2]." juta".".<br>";
	echo $motor[2][0].": CC : " .$motor[2][1].", Harga : ".$motor[2][2]." juta".".<br>";
	echo $motor[3][0].": CC : " .$motor[3][1].", Harga : ".$motor[3][2]." juta".".<br>";
	
/*Penjelasan :<br> 	
		$motor[0][0] = untuk memunculkan data row = 0 (array("Suzuki",120,14)) dan col = 0 ( Suzuki ) Hasilnya = Suzuki.<br>
		$motor[0][1] = untuk memunculkan data row = 0 (array("Suzuki",120,14)) dan col = 1 ( 120 ) Hasilnya = 120.<br>
		$motor[0][2] = untuk memunculkan data row = 0 (array("Suzuki",120,14)) dan col = 2 ( 14 ) Hasilnya = 14.<br>

		$motor[1][0] = untuk memunculkan data row = 1 (array("Honda",110,12)) dan col = 0 ( Honda ) Hasilnya = Honda.<br>
		$motor[1][1] = untuk memunculkan data row = 1 (array("Honda",110,12)) dan col = 1 ( 110 ) Hasilnya = 110.<br>
		$motor[1][2] = untuk memunculkan data row = 1 (array("Honda",110,12)) dan col = 2 ( 12 ) Hasilnya = 12.<br>

		$motor[2][0] = untuk memunculkan data row = 2 (array("Yamaha",125,15)) dan col = 0 ( Yamaha ) Hasilnya = Yamaha.<br>
		$motor[2][1] = untuk memunculkan data row = 2 (array("Yamaha",125,15)) dan col = 1 ( 125 ) Hasilnya = 125.<br>
		$motor[2][2] = untuk memunculkan data row = 2 (array("Yamaha",125,15)) dan col = 2 ( 15 ) Hasilnya = 15.<br>
		
		$motor[3][0] = untuk memunculkan data row = 3 (array("Kawasaki",150,20)) dan col = 0 ( Kawasaki ) Hasilnya = Yamaha.<br>
		$motor[3][1] = untuk memunculkan data row = 3 (array("Kawasaki",150,20)) dan col = 1 ( 150 ) Hasilnya = 150.<br>
		$motor[3][2] = untuk memunculkan data row = 3 (array("Kawasaki",150,20)) dan col = 2 ( 20 ) Hasilnya = 20.<br>	
*/
	$motor = array
	(
	array("Suzuki",120,14),
	array("Honda",110,12),
	array("Yamaha",125,15),
	array("Kawasaki",150,20)
	);
	for ($row = 0; $row < 4; $row++) {
	echo "<p><b>Row number $row</b></p>" ;
	echo "<ul>";
	for ($col = 0; $col < 3; $col++) {
	echo "<li>".$motor[$row][$col]. "</li>";
	}
	echo "</ul>";
	}
	/*Penjelasan :<br>	
		for ($row = 0 ; $row < 4; $row++) untuk menampilkan array = 0 sampai kurang dari 4 dan bertambah satu jika di ulang.
		<br> for ($col = 0; $col < 3; $col++) untuk menampilkan kolom = 0 sampai kurang dari 3 dan bertambah satu jika di ulang.
	*/
	?>
	
	</body>
</html>
