<!doctype html>
<html>
	<head>PHP multidimensional ARRAY 
		<title>PHP</title>
	</head>
	<body><br><br>Two Dimentional Array<br><br>
Untuk menampilkan array baris dan kolom.<br><br>
	<?php
	$cars = array
	(
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
	);
	echo $cars[0][0].": In stock: " .$cars[0][1].", sold: ".$cars[0][2].".<br>";
	echo $cars[1][0].": In stock: " .$cars[1][1].", sold: ".$cars[1][2].".<br>";
	echo $cars[2][0].": In stock: " .$cars[2][1].", sold: ".$cars[2][2].".<br>";
	echo $cars[3][0].": In stock: " .$cars[3][1].", sold: ".$cars[3][2].".<br>";	
	?><br>	
Untuk menampilkan data secara rumus <br><br>
Untuk menampilkan data semua <br>
	<?php
	$cars = array
	(
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
	);
	for ($row = 0; $row < 4; $row++) {
	echo "<p><b>Row number $row</b></p>" ;
	echo "<ul>";
	for ($col = 0; $col < 3; $col++) {
	echo "<li>".$cars[$row][$col]. "</li>";
	}
	echo "</ul>";
	}
	?>
<br>Untuk menampilkan data 0 dan 2 <br>
	<?php
	$cars = array
	(
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
	);
	for ($row = 0; $row < 4 ; $row+=2) {
	echo "<p><b>Row number $row</b></p>" ;
	echo "<ul>";
	for ($col = 0; $col < 3; $col++) {
	echo "<li>".$cars[$row][$col]. "</li>";
	}
	echo "</ul>";
	}
	?>
<br>Untuk menampilkan data 0 dan 3 <br>
	<?php
	$cars = array
	(
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
	);
	for ($row = 0; $row < 4 ; $row+=3) {
	echo "<p><b>Row number $row</b></p>" ;
	echo "<ul>";
	for ($col = 0; $col < 3; $col++) {
	echo "<li>".$cars[$row][$col]. "</li>";
	}
	echo "</ul>";
	}
	?>
	</body>
</html>
