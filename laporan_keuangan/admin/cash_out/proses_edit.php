<?php 
//UNTUK MENJAGA FIELD KITA, JIKA BELUM LOGIN
session_start(); // itu di simpan di browser, bukan di mysql, maupun phpmyadmin
if (isset($_SESSION['email'])) { // perbedaan isset dan empti adalah isset untuk mengecek data,

    include '../../config/koneksi.php';
    echo $ID = $_POST['id']; 
    echo $tanggal = $_POST['tanggal']; 
    echo $jumlah = $_POST['jumlah']; 
    echo $keterangan = $_POST['keterangan'];  
    echo $user = $_SESSION['email'];

// Apabila gambar tidak diganti
    if (empty($tanggal)){
        $sql = "UPDATE cash_out SET 
        jumlah = '$jumlah',
        keterangan = '$keterangan',
        user = '$user'
        WHERE id='$ID'";
        mysqli_query($koneksi,$sql);
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
        exit();
    }else{
        $sql = "UPDATE cash_out SET 
        tanggal = '$tanggal',
        jumlah = '$jumlah',
        keterangan = '$keterangan',
        user = '$user'
        WHERE id='$ID'";
        mysqli_query($koneksi,$sql);
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
        exit();
    }
}  else{
    echo "Anda Belum Login, silahkan <a href='../../index.php'>login</a>";
}
?>