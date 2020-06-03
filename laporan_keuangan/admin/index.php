<?php //UNTUK MENJAGA FIELD KITA, JIKA BELUM LOGIN
session_start(); // itu di simpan di browser, bukan di mysql, maupun phpmyadmin
if (isset($_SESSION['email'])) { // perbedaan isset dan empti adalah isset untuk mengecek data, 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Keuangan | Login</title>
  <?php
    include 'layout/header.php';
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
            include 'layout/messages.php';
          ?>
          <!-- Notifications: style can be found in dropdown.less -->
          <?php
            include 'layout/notifications.php';
          ?>
          <!-- Tasks: style can be found in dropdown.less -->
          <?php
            include 'layout/tasks.php';
          ?>
          <!-- User Account: style can be found in dropdown.less -->
          <?php
            include 'layout/user.php';
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
          include 'layout/sidebar.php';
      ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-light">
                <div class="box-header with-border">
                  <h3 class="box-title">Foto</h3>
                </div>
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <?php
                    include '../config/koneksi.php';
                    $sql    = "SELECT * FROM foto ORDER BY id DESC";
                    $result = mysqli_query($koneksi, $sql);// untuk menghubungkan databases melalui $connect dengan isinya melalui $sql tetapi masih acak
                    if(mysqli_num_rows($result)>0){// jika nggak ada datanya maka while tidak di jalankan
                      while ($row = mysqli_fetch_assoc($result)) {// untuk memunculkan dalam bentuk rapi, mengambil dan dijadikan erray associative
                        echo "
                        <li>".
                          '<img style="width: 50px; height: 50px" src="foto_user/'.$row['foto']. ' " />
                          '."
                          <p class='users-list-name'>".$row['nama']."</p>
                          <span class='users-list-date'>".$row['keterangan']."</span> 

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
                                  <p>".'<img style="width: 200px; height: 200px" src="foto_user/'.$row['foto']. ' " />'."</p>    
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-default pull-ri' data-dismiss='modal'>Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        ";
                      }
                    }

                    ?>
                  </ul>
                  <!-- /.users-list -->
                </div>
              </div>
              <!--/.box -->
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
  include 'layout/scripts.php'
?>
</body>
</html>
<?php
 }  else{
    echo "Anda Belum Login, silahkan <a href='../index.php'>login</a>";
    }
?>