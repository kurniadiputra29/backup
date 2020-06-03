<!DOCTYPE html>
<html>
<head>
	<title>Mencari Nilai Terbesar</title>
</head>
<body>
	<h1>Mencari Nilai Terbesar</h1>
	<?php 
		$a = isset($_POST['a']) ? $_POST['a']:"";
		$b = isset($_POST['b']) ? $_POST['b']:"";
		$c = isset($_POST['c']) ? $_POST['c']:"";
	?>
	<table>
		<form action="" method="">
		<tr>
			<td><label for="a">Variabel a :</label></td>
			<td><input type="" name="a" id="a" value="<?php echo "$a";?> "></td>
		</tr>
		<tr>
			<td><label for="b">Variabel b :</label></td>
			<td><input type="" name="b" id="b" value="<?php  echo "$b";?> "></td>
		</tr>
		<tr>
			<td><label for="c">Variabel a :</label></td>
			<td><input type="" name="c" id="c" value="<?php  echo "$c";?> "></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit">Submit</button>
			<button type="reset">Batal</button></td>
		</tr>
		</form>
	</table>
	<?php
	/*	Cara 1 :
		$a = isset($_POST['a']) ? $_POST['a']:"";
		$b = isset($_POST['b']) ? $_POST['b']:"";
		$c = isset($_POST['c']) ? $_POST['c']:"";
		$arr = ["$a","$b","$c"];
		$max = max($arr);
		function kata($max,$a,$b,$c) {
   		if ($max == $a) {
				echo "Variabel a";
			} 	elseif ($max == $b) {
				echo "Variabel b";			
			}	elseif ($max == $c) {
				echo "Variabel c";
			}
		}
		
		echo "Variabel a = "."$a"."<br>";
		echo "Variabel b = "."$b"."<br>";
		echo "Variabel c = "."$c"."<br>";
		echo "Variabel dengan nilai terbesar = ";
		echo kata($max,$a,$b,$c);

		Cara 2*/
		$arr = ["$a","$b","$c"];
		$max = max($arr);
		function kata($max,$a,$b,$c) {
   		if ($max == $a) {
				echo "Variabel a";
			} 	elseif ($max == $b) {
				echo "Variabel b";			
			}	elseif ($max == $c) {
				echo "Variabel c";
			}
		}
		
		echo "Variabel a = "."$a"."<br>";
		echo "Variabel b = "."$b"."<br>";
		echo "Variabel c = "."$c"."<br>";
		echo "Variabel dengan nilai terbesar = ";
		echo kata($max,$a,$b,$c);
	?>
</body>
</html>
