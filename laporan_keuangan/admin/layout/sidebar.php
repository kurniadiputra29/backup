<?php 

$pagenow    = dirname($_SERVER['PHP_SELF']); echo "<br>";
// $activePage = print_r($pagenow); echo "<br>";
// $hamboh     = $pagenow; echo $hamboh;
// if($activePage == "/perpus_masjid/admin/layouts") {echo "active";} else {echo "";}
$url    = $_SERVER['PHP_SELF'];
$exp    = explode("/", $url);
$get    = $exp[3];

?>
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>
  <li class="<?php if($get === "index.php") {echo "active";} else {echo "";}?>">
    <a href="http://localhost/laporan_keuangan/admin/index.php">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>
  <li class="<?php if($get === "foto") {echo "active";} else {echo "";}?>">
    <a href="http://localhost/laporan_keuangan/admin/foto/index.php">
      <i class="fa fa-edit (alias)"></i>
      <span>Documantation Foto</span>
    </a>
  </li>
  <li class="<?php if($get === "cash_in") {echo "active";} else {echo "";}?>">
    <a href="http://localhost/laporan_keuangan/admin/cash_in/index.php">
      <i class="fa fa-arrow-up (alias)"></i>
      <span>Cash In</span>
    </a>
  </li>
  <li class="<?php if($get === "cash_out") {echo "active";} else {echo "";}?>">
    <a href="http://localhost/laporan_keuangan/admin/cash_out/index.php">
      <i class="fa fa-arrow-down (alias)"></i>
      <span>Cash Out</span>
    </a>
  </li>
  <li class="<?php if($get === "laporan") {echo "active";} else {echo "";}?>">
    <a href="http://localhost/laporan_keuangan/admin/laporan/index.php">
      <i class="fa fa-book (alias)"></i>
      <span>Laporan</span>
    </a>
  </li>
  <li class="<?php if($get === "user") {echo "active";} else {echo "";}?>">
    <a href="http://localhost/laporan_keuangan/admin/user/index_user.php">
      <i class="fa fa-user"></i>
      <span>User</span>
    </a>
  </li>
</ul>