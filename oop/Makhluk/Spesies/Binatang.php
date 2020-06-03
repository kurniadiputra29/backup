<?php
namespace Makhluk\Spesies;

require __DIR__.'/Tumbuhan.php'; // untuk include, require harus di kasih spasi

use Makhluk\Spesies\Tumbuhan; // untuk menggunakan/ memakai file tumbuhan

class Binatang{
	public $nama = '';

	public function setNama($arg){
		return $this->nama = $arg;
	}

	public function makan($arg){
		$tumbuhan = new Tumbuhan();
		return ' Binatang ' . $arg . ' Makan ' . $tumbuhan->nama;// titik digunakan untuk menghubungkan
	}
}
$binatang = New Binatang();
echo $binatang->makan('singo');
?>