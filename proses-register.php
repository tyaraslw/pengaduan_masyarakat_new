<?php
session_start();
include 'koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$notelp = $_POST['notelp'];

$query = $koneksi->query("INSERT INTO masyarakat VALUES('$nik','$nama','$username','$password','$notelp')");
$jumlahBaris = $query->rowCount();

if ($jumlahBaris > 0) {
    // die("berhasil");
    $data = $query->fetch();

    $_SESSION['nik'] = $data['nik'];

    header("location:home.php");
} else {

    // die("gagal");
    header("location:login.php");
}