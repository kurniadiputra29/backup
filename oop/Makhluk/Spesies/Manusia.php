<?php
namespace Makhluk\Spesies;

class Manusia{
	public function __construct(){
		echo 'ini construct selalu di awal->';
	}
	public function __destruct(){
		echo '<- ini destruct selalu di akhir';
	}
	public $nama = 'Kurniadi'; // bisa di panggil di mana saja
	protected $suku = 'Jawa'; // Hanya bisa di panggil kelas itu sendiri dan anaknya
	private $bangsa = 'Indonesia'; // Hanya bisa di panggil kelas itu sendiri dan anaknya tidak bisa

	public function setNama($arg){
		return $this->nama = $arg;
	}
}
$manusia = New Manusia();
echo $manusia->setNama(' Abang ');
?>