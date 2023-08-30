<?php
session_start();
if(!isset($_SESSION)){header('Location:login.php');}
if($_SESSION['level']=='admin' OR $_SESSION['level']=='petugas'){header('Location:admin_page.php');}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>home</title>
</head>
<body>
    <?php include "nav.php" ?>
    <div class="container">
    <div class="mb-3">
    <div class="page">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><h1>Selamat Datang</h1></center>
    <center><h3>Laporan Pengaduan Masyarakat</h3></center>
    <center><p>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p></center>
    <br>
    <center><td><a href='isi_pengaduan.php'>Silahkan Lapor!</a></td></center>
</div>
</div>
</body>
</html>