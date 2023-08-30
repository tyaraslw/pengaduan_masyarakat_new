<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];


  $query = $koneksi->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");
  $data = $query->rowCount();   

  if ($data > 0) { 
     $result = $query->fetch();

     $_SESSION['nik'] = $result['nik'];
     $_SESSION['username'] = $_POST['username'];
     $_SESSION['level'] = "masyarakat";


    header("location:home.php");
} else { 

      $query = $koneksi->query("SELECT * FROM petugas WHERE username='$username' AND password='$password'");
      $data = $query->rowCount();   

       if ($data > 0) { 
          $result = $query->fetch();

          $_SESSION['username'] = $_POST['username'];
          $_SESSION['id_petugas'] = $result['id_petugas'];
          $_SESSION['level'] = $result['level'];


          header("location:petugas/home2.php");
        } else {  // die("gagal");
          header("location:login.php?pesan=username atau password salah");
        }
}