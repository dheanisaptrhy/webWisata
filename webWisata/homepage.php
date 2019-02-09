<?php
include 'connect.php'
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
		background-image: url(foto/ba1.jpg);
		background-size: cover;
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
<!-- <div class="pusher"> -->
<div class="teks">
<h1>Find Your Destination</h1>
</div>
 <div class="ui three column grid" id="grid">
  <div class="column">
    <div class="ui fluid card">
      <div class="image">
        <img src="img/bromo1.jpg">
      </div>
      <div class="content">
        <a class="header" href="wisataAlam.php">Wisata Alam</a>
        <div class="meta">
        <a href="wisataAlam.php">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</a>
      </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui fluid card">
      <div class="image">
        <img src="img/kuliner6.jpg">
      </div>
      <div class="content">
        <a class="header" href="wisataKuliner.php">Wisata Kuliner</a>
        <div class="meta">
        <a href="wisataKuliner.php">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</a>
      </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui fluid card">
      <div class="image">
        <img src="img/pemandian.jpg">
      </div>
      <div class="content">
        <a class="header" href="wisataPemandian.php">Wisata Pemandian</a>
        <div class="meta">
        <a href="wisataPemandian.php">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</a>
      </div>
      </div>
    </div>
  </div>
</div>
  <!-- </div> -->

</body>
<script>
   $('#toggle').click(function(){
    $('.ui.sidebar').sidebar('toggle');
   });
</script>
</html>
