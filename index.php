<!DOCTYPE html>
<html>
<head>
  <title>HOTEL PSI FRONTEND</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css"/>
</head>
<body>
   <!-- header -->
   <div class="header">
  <h1 class="head">Hadasa Hotel Surabaya</h1>
  <p>Supercool hotel in Surabaya</p>
</div>
   <!-- navigation -->
    <div class="navbar">
    <a class="active" href="?page=home">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Master 
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="?page=pegawai">Pegawai</a>
      <a href="?page=pelanggan">Pelanggan</a>
    </div>
  </div>  
  <a class="active" href="?page=transaksi">Transaksi</a>
</div>

<!-- Content -->

<?php
if (isset($_GET['page'])){
    $page = $_GET['page'];
}
else {
    $page = 'home';
}
switch ($page) {
    case 'home':
        include "modul/home.php";
        break;

    case 'pegawai':
        include "modul/pegawai.php";
        break;

    case 'transaksi':
        include "modul/transaksi.php";
        break;
    case 'pelanggan':
        include "modul/pelanggan.php";
        break;

    default:
        # code...
        break;
}
?>

<!-- Footer -->
    <div class="footer">
  <p>Victoria Kristika - 13.2017.1.00553</p>
</div>

</body>
</html>