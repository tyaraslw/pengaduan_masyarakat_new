<?php
//koneksi database
include 'koneksi1.php';
// $id = $_GET['id_pengaduan'];
// $koneksi =new PDO ("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");

//query
// $query = $koneksi->query("select * from pengaduan where id_pengaduan='$id' ");
// $data = $query->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>halaman-edit</title>
</head>
<body>
    <form action="prosesupdate.php" method="POST" enctype="multipart/form-data">
    <div class="container">
      <?php 
      include "koneksi1.php";
      $id = $_GET['id_pengaduan'];
      $data = mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE id_pengaduan='$id'");
      while($d = mysqli_fetch_array($data));
      ?>
      <div class="mb-3">
      <label for="formFile" class="form-label"> Bukti Foto</label>
      <input type="file" class="form-control" id="formFile" name="foto">
   </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label"> Isi Laporan</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="isi_Laporan" rows="5" ></textarea>
    </div>
    <input class="btn btn-primary" type="submit" value="Kirim">
    <button type="submit" class="btn btn-light" href="pengaduan.php">Back</button>
    </form>
</div>
</body>
</html>
