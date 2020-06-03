<form method = "POST" action="">
	<tr>
		<td><label for = isi> Input </label></td>
		<td><input type= "text" name="input" id="isi"></td>
		<td><input type="submit" value = "submit">
	</tr>
</form>


<?php 
$kata = $_POST['input'];
$cek = strlen($kata);
if (empty($cek)) {
	echo "";
} elseif ($cek < 6) {
	echo $kata."***";
} elseif ($cek){
	echo $kata."-".$kata."-".$kata;
}
?>

