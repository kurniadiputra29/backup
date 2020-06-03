<?php //UNTUK MENJAGA FIELD KITA, JIKA BELUM LOGIN
session_start(); // itu di simpan di browser, bukan di mysql, maupun phpmyadmin
if (isset($_SESSION['email'])) { // perbedaan isset dan empti adalah isset untuk mengecek data, 
  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Keuangan | Laporan</title>
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
            Laporan
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Laporan</li>
          </ol>
        </section>
        <section class="content">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr class="bg-aqua">
                  <th class="text-center">Kategori</th>
                  <th class="text-center">Cash In</th>
                  <th class="text-center">Cash Out</th>
                </tr>  
                <?php
                  include '../../config/koneksi.php';
                  $user = $_SESSION['email'];
                  $sql1    = "SELECT * FROM cash_in WHERE user = '$user' ORDER BY id DESC";
                  $result1 = mysqli_query($koneksi, $sql1);// untuk menghubungkan databases melalui $connect dengan isinya melalui $sql tetapi masih acak
                  if(mysqli_num_rows($result1)>0){// jika nggak ada datanya maka while tidak di jalankan
                    while ($row1 = mysqli_fetch_assoc($result1)) {// untuk memunculkan dalam bentuk rapi, mengambil dan dijadikan erray associative
                      $jumlah1[] = $row1['jumlah'];
                    }
                  }

                  $sql2    = "SELECT * FROM cash_out WHERE user = '$user' ORDER BY id DESC";
                  $result2 = mysqli_query($koneksi, $sql2);// untuk menghubungkan databases melalui $connect dengan isinya melalui $sql tetapi masih acak
                  if(mysqli_num_rows($result2)>0){// jika nggak ada datanya maka while tidak di jalankan
                    while ($row2 = mysqli_fetch_assoc($result2)) {// untuk memunculkan dalam bentuk rapi, mengambil dan dijadikan erray associative
                      $jumlah2[] = $row2['jumlah'];
                    }
                  }
                  $jumlahnya1 = array_sum($jumlah1);
                  $jumlahnya2 = array_sum($jumlah2);
                  $balance = ($jumlahnya1-$jumlahnya2);

                  echo "
                  <tr class=''>
                    <td>".Kas."</td>
                    <td class='text-right'>".Rp ." ". number_format($jumlahnya1, 0, " ", ".")."</td>
                    <td class='text-right'>".Rp ." ". number_format($jumlahnya2, 0, " ", ".")."</td>
                  </tr>
                  <tr class='bg-green'>
                    <td>".Balance."</td>
                    <td colspan='2' class='text-center'>".Rp ." ". number_format($balance, 0, " ", ".")."</td>
                  </tr>
                  ";
                ?>
              </table>
            </div>
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
      </div>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
      </footer>
    </div>
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