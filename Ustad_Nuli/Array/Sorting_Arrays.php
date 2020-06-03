<!doctype html>
<html>
	<head>PHP Sorting Arrays ARRAY 
		<title>PHP</title>
	</head>
	<body><br><br>Sort Array in Ascending<br><br>
<br>mengurutkan huruf<br>
	<?php
	$cars = array("Volvo", "BMW", "Toyota");
	sort($cars);
	?>
<br>Mengurutkan Angka<br>
	<?php
	$numbers = array(4, 6, 2, 22, 11);
	sort($numbers);
	?>
<br>Sort Array in Ascending<br>
	<?php
	$cars = array("Volvo", "BMW", "Toyota");
	rsort($cars);
	?>
<br>Sort Array in Ascending<br>
	<?php
	$numbers = array(4, 6, 2, 22, 11);
	rsort($numbers);
	?>
<br>Sort Array in Ascending<br>
	<?php
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
	asort($age);
	?>
<br>Sort Array in Ascending<br>
	<?php
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
	ksort($age);
	?>
<br>Sort Array in Ascending<br>
	<?php
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
	arsort($age);
	?>


	</body>
</html>	
