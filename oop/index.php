<?php

class Mobil {
	 	//Property
	private $jumlahRoda;
		//Property
	private $jumlahKursi;
	private $sopir;
		//Method
		public function setJumlahRoda($roda){
		$this->jumlahRoda/*ini dari property*/ = $roda;// this digunakn untuk mengakses property & untuk mengakses function yang lain
		}
		//Method
		public function setJumlahKursi($kursi){
		$this->jumlahKursi = $kursi;
		}
		//Method
		
		public function cetak(){
		echo 'Mobil punya '.$this->jumlahRoda.' roda dan '.$this->jumlahKursi.' kursi dan'.' Pengemudi bernama : '.$this->sopir.'<br>';
		}
		public function setSopir($nama){
		return $this->sopir = $nama;
		}
}

$sedan = new Mobil();//Object (untuk memanggil inisialisasi objek)

$sedan->setJumlahRoda(4);// set untuk masukin data
$sedan->setJumlahKursi(4);// get untuk mengambil data
$sedan->setSopir("Pairen");
$sedan->cetak();
echo PHP_EOL;

$sedan->setJumlahRoda(6);
$sedan->setJumlahKursi(6);
$sedan->setSopir("Paijo");
$sedan->cetak();
echo PHP_EOL;

// tugas !!!
// buat contrutor
// buat destrktor
// visiability protected
// contoh inheritance
// overloading
?>


<?php
 
//Cara penulisan class OOP PHP - www.malasngoding.com
class nama_class{
 
     //isi dari class ini
 
}
?>


<?php
 
//Cara penulisan class dan property OOP PHP - www.malasngoding.com
class Mobil{
 
    var $warna;
    var $merek;
    var $ukuran;
 
}
?>


<?php
 
//Cara penulisan class dan property OOP PHP - www.malasngoding.com
class mobil{
    // property oop
    var $warna;
    var $merek;
    var $ukuran;
 
   //method oop
   function maju(){
       //isi method
   }
 
   function berhenti(){
       //isi mehod
   }
 
}
?>


<?php
 
//Cara penulisan class dan property OOP PHP - www.malasngoding.com
class mobil{
  
 //isi class
 
}
 
$mobil = new mobil();
?>


<?php
//PHP OOP Part 2  Pengertian Class, Object, Property dan Method
//class manusia
class manusia{
    //property
    var $nama;
    var $warna;
    
    //method manusia
    function tampilkan_nama(){
        return "Nama saya malasngoding <br/>";
    }
    
    function warna_kulit(){
        return "Warna kulit saya hitam <br/>";
    }
    
}
//instansiasi class manusia
$manusia = new manusia();
 
//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();
 
//memanggil method warna_kulit dari class manusia
echo $manusia->warna_kulit();

?>

