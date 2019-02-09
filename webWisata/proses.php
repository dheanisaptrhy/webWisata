<?php
include 'connect.php';//Mengkoneksikan dengan connect.php
session_start(); // Memulai Session login
// $_SESSION['username']=$_POST['username'];
  // $nama = $_POST['nama'];
  // $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  // $jeniskelamin = $_POST['jeniskelamin'];

  // Membangun koneksi ke database
  $mysqli = mysqli_query($meong,"SELECT * FROM pengguna
    WHERE username='$username' AND password='$password' ");
  $cek = mysqli_num_rows($mysqli);
  $hasil = mysqli_fetch_array($mysqli);
      if (!$_SESSION['username']=$hasil['username']) {
           echo "Username atau Password salah <a href='login.php'>";
         }else {
          $_SESSION['username']=$hasil['username'];
          header('location:homepage.php');
    }

?>
