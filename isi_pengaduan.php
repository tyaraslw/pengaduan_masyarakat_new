<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>isi_pengaduan</title>
</head>
<?php
session_start();
if(!isset($_SESSION)){header('Location:login.php');}
if($_SESSION['level']=='admin' OR $_SESSION['level']=='petugas'){header('Location:admin_page.php');}
?>
<body>
    <?php include "nav.php" ?>
    <form action="proses_pengaduan.php" method="POST" enctype="multipart/form-data">
    <div class="container">
    <div class="mb-3">
    <label for="formFile" class="form-label"> Bukti Foto</label>
    <input type="file" class="form-control" id="formFile" name="foto">
    </div>

    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="isi_Laporan" rows="3"></textarea>
    </div>
    <input class="btn btn-primary" type="submit" value="Kirim"> 
    </form>
</div>
</body>
</html>