<?php
  $namahost = "localhost";
  $user = "root";
  $pass = "";
  $database = "a";
  $meong = mysqli_connect($namahost,$user,$pass,$database) or die("Failed");
  mysqli_select_db($meong, $database) or die("Database not exist");
