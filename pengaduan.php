<?php

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat", "root", "");

$query = $koneksi->query("select * from pengaduan");
$data = $query->fetchAll();
//var_dump($data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <title>pengaduan</title>
</head>

<body>
  <?php include "nav.php" ?>
  <div class="container">
    <table class="table">
      <thead>
        <!-- <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Nik</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
    </tr> -->
        <tr>
          <th scope="col">tanggal_pengaduan</th>
          <th scope="col">id_pengaduan</th>
          <th scope="col">isi_laporan</th>
          <th scope="col">foto</th>
          <th scope="col">status</th>
          <th scope="col">opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $pengaduan) { ?>
          <tr scope="row"></tr>
          <td>
            <?= $pengaduan['tgl_pengaduan'] ?>
          </td>
          <td>
            <?= $pengaduan['nik'] ?>
          </td>
          <td>
            <?= $pengaduan['isi_laporan'] ?>
          </td>
          <td><img height="80px" width="100px" src="image/<?= $pengaduan['foto'] ?>"></td>
          <?php
          echo "<td>" . $pengaduan['status'] . "</td>";
          echo "<td>";
          echo "<td><a href='halaman_edit.php?id_pengaduan=$pengaduan[id_pengaduan]'>Edit</a>|
                  <a href='proseshapus.php?id_pengaduan=$pengaduan[id_pengaduan]'>Delete</a></td></tr>";
          echo "</td>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>