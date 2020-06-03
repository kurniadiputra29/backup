<?php //UNTUK MENJAGA FIELD KITA, JIKA BELUM LOGIN
session_start(); // itu di simpan di browser, bukan di mysql, maupun phpmyadmin
if (isset($_SESSION['email'])) { // perbedaan isset dan empti adalah isset untuk mengecek data, 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
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
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
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
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../foto_user/<?php echo $_SESSION['foto']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $_SESSION['name']; /*<?= $_SESSION['email']; ?> ini sama dengan echo dan ini fersi terpendek*/
          ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php
          include '../layout/sidebar_artikel.php';
      ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Artikel
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Artikel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
                <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Artikel</h3>
            </div>
            <!-- /.box-header -->
             <?php
            include '../../config/koneksi.php';
            $ID     = $_GET['id'];
            $sql    = "select * from article where id=$ID";
            $result = mysqli_query($koneksi,$sql);
            $row    = mysqli_fetch_assoc($result);
            $isi    = $row['isi'];
            $gambar = $row['gambar'];
            $tampil = $row['kategori_id'];
            $sql1    = "select * from kategori where id=$tampil";
            $result1 = mysqli_query($koneksi,$sql1);
            $row1    = mysqli_fetch_assoc($result1);
            $seleck = $row1['nama'];
            ?>
            <form class="form-horizontal" action="proses_edit.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $ID; ?> " >
                  <label for="title" class="col-sm-2 control-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="title" value="<?php echo $row['title']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="gambar" class="col-sm-2 control-label">File Gambar</label>
                  <div class="col-sm-10">
                    <input type="file" name="gambar" class="form-control" id="gambar" placeholder="Gambar">
                    <img src="../../gambar/<?php echo $gambar; ?>" style="width: 100px; height: 100px; margin-top: 20px;">
                    <span><?php echo $row['gambar'];?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="status" class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10 radio">
                    <label>
                      <input type="radio" name="status" id="status" value="1" <?php if ($row['status']=="1"){echo "checked";}?>/> 
                      Aktif
                    </label>
                  </div>
                  <div class="col-sm-2 control-label"></div>
                  <div class="col-sm-10 radio">
                    <label>
                      <input type="radio" name="status" id="status" value="0" <?php if($row['status']=="0"){echo "checked";}?>/>
                      Tidak Aktif
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="kategori" class="col-sm-2 control-label">Kategori</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="kategori" id="kategori" placeholder="Kategori" required>
                    <?php
                    echo "
                        <option value=".$tampil.">
                          ".$seleck."
                        </option>
                        ";
                    ?>
                    <?php
                    include '../../config/koneksi.php';
                    $sql2    = "SELECT * FROM kategori";
                    $result2 = mysqli_query($koneksi,$sql2);// untuk menghubungkan databases melalui $connect dengan isinya melalui $sql tetapi masih acak
                    if(mysqli_num_rows($result2)>0){// jika nggak ada datanya maka while tidak di jalankan
                      while ($row2 = mysqli_fetch_assoc($result2)) {// untuk memunculkan dalam bentuk rapi, mengambil dan dijadikan erray associative
                        echo "
                        <option value=".$row2['id'].">
                          ".$row2['nama']."
                        </option>
                        ";
                      }
                    }
                    ?>
                    </select>
                  </div>
                </div>
              </div>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">ISI
                <small>Create</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
          </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea name="isi" class="textarea"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?php echo $row['isi']; ?></textarea>
            </div>
          </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="index.php" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
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