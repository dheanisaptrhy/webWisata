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
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
  body{
    background-image: url(foto/ba3.jpg);
    background-size: cover;
    margin: 0;
    padding: 10px;
  }
  #a{
    text-align: center;
    font-size: 25px;
    color: grey;
    margin-top:1%;
    margin-bottom: 1%;
  }
  #b{
      margin-top: 1%;
      margin-left: 35%;
      margin-right: 35%;
      border-style: outset;
      border-radius: 4px;
      margin-bottom: 3%;
  }
  #c{
    margin-top: 5%;
    margin-left: 23%;
      margin-right: 23%;
    border-style: outset;
      border-radius: 4px;
      margin-bottom: 5%;
     background-color: white;
  }
    #s{
    border-style: outset;
      border-radius: 4px;
      margin-left: 0%;
      margin-right: 10%;
      margin-top: 5%;
      margin-bottom: 5%;

  }
  .l{
    text-align: center;
    font-size:14px;
    color: grey;
  }
    .pusher{
      margin-top: 25px;
    }


  </style>
</head>
<body>
<div class="ui sidebar vertical left inverted black menu">
  <a href="homepage.php" class="item">Home</a>
  <a href="search.php" class="item">Explore</a>
  <div class="menu">
    <a class="item" href="wisataAlam.php">Wisata Alam</a>
    <a class="item" href="wisataKuliner.php">Wisata Kuliner</a>
    <a class="item" href="wisataPemandian.php">Wisata Pemandian</a>
    </div>
  <a href="profile.php" class="item">Profile</a>
  <a href="logout.php" class="item">Logout</a>
</div>
<div class="ui basic icon top fixed menu">
  <a id="toggle" class="item">
    <i class="sidebar icon"></i>
    Menu
  </a>

</div>
<div class="pusher">


   <div class="sixteen wide column"id="c">
    <div class="meta" id="a">Profile</div>
  <img class="ui centered large circular image" src="foto/526652.jpg" style="height: 250px; width: 250px">
<form action="editprofil.php" method="POST">
  <button class="ui right floated grey button">
<i class="edit icon"></i>
  Edit
</button></form>
  <table class="ui selectable table"id="s">
  <tbody>
    <tr>
      <td class="l">Name
     <p style="text-align: left;font-size:20px;color: black;">
       <?php echo "<a href='profile.php'>".$data['nama']; ?>
       </p>
     </td>
    </tr>
    <tr>
      <td class="l">Username
     <p style="text-align: left; font-size:20px;color: black;">
     <?php echo "<a href='profile.php'> @".$data['username']; ?>
     </p></td>
    </tr>
    <tr>
      <td class="l">Jenis Kelamin
     <p style="text-align: left;font-size:20px;color: black;">
       <?php echo $data['jeniskelamin']; ?>
     </p>
   </td>
    </tr>
  </tbody>

</table>
</div>
</div>
</body>
  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<script>
   $('#toggle').click(function(){
    $('.ui.sidebar').sidebar('toggle');
   });
</script>
</html>
