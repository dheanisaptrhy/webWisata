<?php
include 'connect.php';
session_start();
$q = mysqli_query($meong,"SELECT * FROM pengguna WHERE username='$_SESSION[username]'");
$data = mysqli_fetch_array($q);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>

  <link rel="stylesheet" type="text/css" href="">
  <style type="text/css">
  body{
    margin: 0;
    padding: 0;
  }
    .pusher{
      margin-top: 15px;
    }
    #grid{
      margin-top: 3%;
      margin-left: 2%;
      padding-right: 50px;
    }
    .teks{
      margin-top: 4%;
      text-align: center;
    }
    h1{
      font-size: 45px;
    }

  </style>
</head>
<body>
<div class="ui vertical inverted sidebar menu">
  <a href="#" class="item">Explore</a>
  <div class="menu">
      <a class="item">Wisata Alam</a>
      <a class="item">Wisata Kuliner</a>
      <a class="item">Wisata Pemandian</a>
    </div>
  <a href="profil.php" class="item">Profile</a>
  <a href="logout.php" class="item">Logout</a>
</div>
<div class="ui basic icon top fixed menu">
  <a id="toggle" class="item">
    <i class="sidebar icon"></i>
    Menu
  </a>

</div>

  <div class="ui center aligned segment">
  <h4 class="ui horizontal divider header">
  <h1>PROFILE<br></h1>
  <center>
    <img class="ui medium circular image" src="/images/wireframe/square-image.png"></center>
</h4>

<table class="ui definition table">
  <tbody>
    <!-- <img class="ui medium circular image" src="/images/wireframe/square-image.png"> -->
    <tr>
      <td class="two wide column">Name</td>
      <td><?php echo "<a href='profil.php'>".$data['nama']; ?></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><?php echo "<a href='profil.php'> @".$data['username']; ?></td>
    </tr>
    <tr>
      <td>Sex</td>
      <td><?php echo $data['jeniskelamin']; ?></td>
    </tr>
    <tr>
      <td>
      <form action="editprofil.php" method="POST"><input type="submit" value="Edit User"></form>
      <form action="logout.php" method="POST"><input type="submit" value="Logout"></form>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
<script>
   $('#toggle').click(function(){
    $('.ui.sidebar').sidebar('toggle');
   });
</script>
</html>
