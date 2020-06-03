<?php

namespace Makhluk\Spesies\Jenis;

require __DIR__.'/../Manusia.php';
// atau '../Manusia.php';
use Makhluk\Spesies\Manusia;

class Muslim extends Manusia{// Penurunan sifat

	// public function setSantri($value){
	// 	return $this->setNama($value);
	// } 
}
$muslim = New Muslim();
echo $muslim->nama;
echo " "; // untuk space
echo $muslim->suku;// Eror karena pada file manusia jenisnya protected
echo " "; 
echo $muslim->bangsa; // Eror karena pada file manusia jenisnya private
?>