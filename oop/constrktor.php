<?php
 
class nama_class{
 
    function __construct(){
        //isi fungsi construct
    }
 
}

?>

<?php
 
//class manusia
class manusia{
    //property
    var $nama;
    var $warna;
    
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    function __destruct(){
        echo "ini adalah isi method destruct <br/>";
    }
    
    //method manusia
    function tampilkan_nama(){
        return "Nama saya malasngoding <br/>";
    }

}
//instansiasi class manusia
$manusia = new manusia();
 
//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();

?>

