MUNCULKAN SEMUA OPERASI<br>
1. CARA PANJANG<br>
<?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}
echo "10 + 6 = " . sum(10, 6) . "<br>";
?>
<?php
function kurangi($a, $s) {// jangan ketik min karena menipu
    $q = $a - $s;
    return $q;
}
echo "7 - 6 = " . kurangi(7, 6) . "<br>";
?>
<?php
function kali($x, $y) {
    $w = $x * $y;
    return $w;
}
echo "100 * 6 = " . kali(100, 6) . "<br>";
?>
<?php
function bagi($x, $y) {
    $e = $x / $y;
    return $e;
}
echo "10 / 6 = " . bagi(10, 6) . "<br>";
?>
<?php
function modulus($x, $y) {
    $r = $x % $y;
    return $r;
}
echo "10 % 6 = " . modulus(10, 6) . "<br>";
?><br>
2. CARA SIMPEL<br>
<?php
function su($x, $y) {
    $z = $x + $y;
    return $z;
}
function kurang($a, $s) {// jangan ketik min karena menipu
    $q = $a - $s;
    return $q;
}
function kal($x, $y) {
    $w = $x * $y;
    return $w;
}
function bag($x, $y) {
    $e = $x / $y;
    return $e;
}
function modulu($x, $y) {
    $r = $x % $y;
    return $r;
}
echo "10 + 6 = " . su(10, 6) . "<br>";
echo "7 - 6 = " . kurang(7, 6) . "<br>";
echo "10 * 6 = " . kal(10, 6) . "<br>";
echo "10 / 6 = " . bag(10, 6) . "<br>";
echo "10 % 6 = " . modulu(10, 6) . "<br>";
?><br>
LUAS SEGITIGA<br>
<?php
function luas($A, $T) {
    $L = 1/2 * ($A * $T);
    return $L;
}
echo "1/2 * 10 + 6 = " . luas(10, 6) . "<br>";
?><br>
