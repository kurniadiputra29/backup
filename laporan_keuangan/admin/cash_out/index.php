<?php //UNTUK MENJAGA FIELD KITA, JIKA BELUM LOGIN
session_start(); // itu di simpan di browser, bukan di mysql, maupun phpmyadmin
if (isset($_SESSION['email'])) { // perbedaan isset dan empti adalah isset untuk mengecek data, 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Keuangan | Cash Out</title>
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
        Cash Out
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cash Out</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
                <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Cash Out</h3>
              <a href="create.php" class="btn btn-primary pull-right">Create</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th class="text-center">Tanggal</th>
                  <th class="text-center">Jumlah</th>
                  <th class="text-center">Keterangan</th>
                  <th class="text-center">Action</th>
                </tr>
                <?php
                  include '../../config/koneksi.php';
                  $halaman = 10;
                  $user = $_SESSION['email'];
                  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                  $sql1 = "SELECT * FROM cash_out WHERE user = '$user' ORDER BY id DESC";
                  $result1 = mysqli_query($koneksi, $sql1);
                  $total = mysqli_num_rows($result1);
                  $pages = ceil($total/$halaman); 
                  $sql2 = "SELECT * FROM cash_out WHERE user = '$user' ORDER BY id DESC LIMIT $mulai, $halaman";    
                  $query = mysqli_query($koneksi, $sql2);   
                  $nomor = $mulai+1;

                  if(mysqli_num_rows($query)>0){// jika nggak ada datanya maka while tidak di jalankan
                    while ($row = mysqli_fetch_assoc($query)) {// untuk memunculkan dalam bentuk rapi, mengambil dan dijadikan erray associative
                      echo "
                      <tr>
                        <td>".$nomor++."</td>
                        <td>".date('d F Y', strtotime($row['tanggal']))."</td>
                        <td class='text-right'>".Rp ." ". number_format($row['jumlah'], 0, " ", ".")."</td>
                        <td>".$row['keterangan']."</td><td>
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
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><span>&laquo;</span></li>
                <?php for ($i=1; $i<=$pages ; $i++){ ?>
                <li>
                    <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
                <?php } ?>
                <li><span>&raquo;</span></li>
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