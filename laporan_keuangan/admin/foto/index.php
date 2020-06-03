<?php //UNTUK MENJAGA FIELD KITA, JIKA BELUM LOGIN
session_start(); // itu di simpan di browser, bukan di mysql, maupun phpmyadmin
if (isset($_SESSION['email'])) { // perbedaan isset dan empti adalah isset untuk mengecek data, 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Keuangan | Foto</title>
  <?php
    include '../layout/header.php';
  ?>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Keuangan</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Keuangan</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <?php
            include '../layout/messages.php';
          ?>
          <!-- Notifications: style can be found in dropdown.less -->
          <?php
            include '../layout/notifications.php';
          ?>
          <!-- Tasks: style can be found in dropdown.less -->
          <?php
            include '../layout/tasks.php';
          ?>
          <!-- User Account: style can be found in dropdown.less -->
          <?php
            include '../layout/user.php';
          ?>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <?php
          include '../layout/sidebar.php';
      ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Foto
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Foto</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
                <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Foto</h3>
              <a href="create.php" class="btn btn-primary pull-right">Create</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Keterangan</th>
                  <th class="text-center">Foto</th>
                  <th class="text-center">Action</th>
                </tr>               
                <?php
                  include '../../config/koneksi.php';
                  $nomor  = 1;
                  $sql    = "SELECT * FROM foto ORDER BY id DESC";
                  $result = mysqli_query($koneksi, $sql);// untuk menghubungkan databases melalui $connect dengan isinya melalui $sql tetapi masih acak
                  if(mysqli_num_rows($result)>0){// jika nggak ada datanya maka while tidak di jalankan
                    while ($row = mysqli_fetch_assoc($result)) {// untuk memunculkan dalam bentuk rapi, mengambil dan dijadikan erray associative
                      echo "
                      <tr>
                        <td>".$nomor++."</td>
                        <td>".$row['nama']."</td>
                        <td>".$row['keterangan']."</td> 
                        <td>".'<img style="width: 50px; height: 50px" src="../foto_user/'.$row['foto']. ' " />'."</td>                      
                        <td>
                          <button type='button' class='btn btn-default' data-toggle='modal' data-target='#".$row['id']."'>
                            Lihat
                          </button>

                          <div class='modal fade' id='".$row['id']."'>
                            <div class='modal-dialog'>
                              <div class='modal-content'>
                                <div class='modal-header'>
                                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span></button>
                                  <h4 class='modal-title text-center'>Tampilkan Foto</h4>
                                </div>
                                <div class='modal-body text-center'>
                                  <p>".'<img style="width: 200px; height: 200px" src="../foto_user/'.$row['foto']. ' " />'."</p>    
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-default pull-ri' data-dismiss='modal'>Close</button>
                                </div>
                              </div>
                            </div>
                          </div>

                           |
                          <a href='edit.php?id=".$row['id']."' class='btn btn-primary btn-x5'>Edit</a> |
                          <a href='hapus.php?id=".$row['id']."' class='btn btn-danger btn-x5' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
                        </td>
                      </tr>
                      
                      
                      ";
                    }
                  }

                  ?>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php
  include '../layout/scripts.php'
?>
</body>
</html>
<?php
 }  else{
    echo "Anda Belum Login, silahkan <a href='../../index.php'>login</a>";
    }
?>