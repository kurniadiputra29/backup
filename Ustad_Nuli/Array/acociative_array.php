<!doctype html>
<html>
	<head>PHP Associative ARRAY 
		<title>PHP</title>
	</head>
	<body><br><br>
Untuk menampilkan umur satu persatu.<br>
	<?php
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
	echo "Peter berumur " . $age['Peter'] . " tahun."."<br>";
	echo "Ben berumur " . $age['Ben'] . " tahun."."<br>";
	echo "Joe berumur " . $age['Joe'] . " tahun."."<br>";
	?><br>
Untuk menampilkan umur secara rumus.<br>
Index tidak boleh sama, value boleh sama <br>
	<?php
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
	foreach($age as $x => $x_value) {
		echo "Key=" . $x . ", Value=" . $x_value;
		echo "<br>";
	}
	?>
	
	</body>
</html>
