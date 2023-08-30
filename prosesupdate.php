<?php
    include 'koneksi1.php';
    $isi = $_POST ['isi_Laporan'];

    //var_dump($_FILES['foto']);

    $nama_foto = $_FILES['foto']['name'];
    $asal_foto = $_FILES['foto']['tmp_name'];
    
    $result = $koneksi->query("UPDATE pengaduan SET `isi_laporan`='$isi',`foto`='$nama_foto' WHERE id_pengaduan='$id'");
    if($result){
        move_uploaded_file($asal_foto, "image/$nama_foto");
        header("Location:pengaduan.php");
    }