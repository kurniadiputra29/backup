<?php
//namespace
namespace Makhluk\Spesies; // digunakan untuk memberikan nama atau alamat pada field. Atau seperti NIK
//Class
class Tumbuhan{
	//Properti
	public $nama; // harus pa
	public $daun = 'Sejajar';
	public $biji = 'Ubi';
	//Method
	function setNama($arg){
		return $this->nama = $arg;
	}
}
$tumbuhan = New Tumbuhan(); // bisa new atau New
echo $tumbuhan->setNama('Telo');
?>