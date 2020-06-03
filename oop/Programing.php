<?php
//nama kelas
Class Programing{
	//Property
	private $jamPelajaran;
	private $jumlahPelajaran;

		//method
		public function setJumlahPelajaran($pelajaran){
			$this->jumlahPelajaran/*ini dari property*/ = $pelajaran ;// set untuk mengisi parameter
		}
		public function setJamPelajaran($jam){
			$this->jamPelajaran = $jam;
		}
		public function getJumlahPelajaran(){
			echo "Jumlah Pelajaran Saya " .$this->jumlahPelajaran."<br> Dan Jam Pelajaran Saya adalah ". $this->jamPelajaran ;// get untuk mengambil isi dari parameter
		}
		public function cetak(){
			echo "<br>Jumlah Pelajaran Saya " .$this->jumlahPelajaran."<br> Dan Jam Pelajaran Saya adalah ". $this->jamPelajaran .'<br><br>';// atau langsung bisa di echo dengan membuat function baru
		}
}	
// objek
$programing = new Programing();
$programing->setJumlahPelajaran(5);
$programing->setJamPelajaran(10);
$programing->getJumlahPelajaran();
$programing->cetak();
echo PHP_EOL;
// membuat isi set yang berbeda tanpa membuat variabel yang baru
$programing->setJumlahPelajaran(2);
$programing->setJamPelajaran(6);
$programing->getJumlahPelajaran();
$programing->cetak();
// membuat objek lebih dari 1 bisa contohnya :
$programing2 = new Programing();
$programing2->setJumlahPelajaran(3);
$programing2->setJamPelajaran(9);
$programing2->getJumlahPelajaran();
$programing2->cetak();
echo PHP_EOL;
?>