<?php
   include "connect.php";
   session_start();
   $id=$_POST['ID'];
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $jeniskelamin = $_POST['jeniskelamin'];
      mysqli_query($meong,"UPDATE pengguna SET
        nama =  '$nama',
        email =  '$email',
        username =  '$username',
        password = '$password ',
        jeniskelamin =  '$jeniskelamin'
        WHERE ID = '$id'");
   // }

   header("location:profile.php");
