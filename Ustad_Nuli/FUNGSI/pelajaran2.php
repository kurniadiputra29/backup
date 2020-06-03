1. Explode Function<br><br>
<?php
//echo untuk memunculkan sebagian yang kita tunjuk
//print sama dengan echo
//print_r untuk semua di dalam eray akan muncul
$str = 'one,two,three,four';

// zero limit
print_r(explode(',',$str,0));
print "<br>";

// positive limit
print_r(explode(',',$str,2));
print "<br>";

// negative limit 
print_r(explode(',',$str,-1));
?><br><br>
2. Implode Function<br><br>
<?php
// implode adalah untuk merubah integer(angka) menjadi tipe string(huruf)
//
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr)."<br>";
echo implode("+",$arr)."<br>";
echo implode("-",$arr)."<br>"; 
echo implode("X",$arr);
?><br><br>
3. Trim Function<br><br>
<?php
//trim untuk menghilangkan kata secara urut dari samping kanan maupun kiri secara berurutan. bila ada huruf yang sama maka dia akan hilang semua.
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");
?><br>
<?php
$str = " Hello World! ";
echo "Without trim: " . $str;// tanpa trim akan ada spasi di depan hello
echo "<br>";
echo "With trim: " . trim($str); // untuk menghilangkan spasi di depan hello
?><br><br>
4. Rtrim Function<br><br>
<?php
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");
?><br><br>
5. Strlen Function<br><br> 
strlen(string)
<?php
echo strlen("Hello world!");
?>


