<?php
include 'connect.php';
session_start();
$query = "SELECT * FROM pengguna";
$sql = $meong->query($query);
while ($row = $sql->fetch_object()){
  $_session['ID']=$row->ID;
}

if(isset($_SESSION['username'])) {
header('location:proses.php'); }
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
<link rel="stylesheet" href="css/style.css">
<style type="text/css">
  body{
  	background-image: url(foto/ba1.jpg);
  	background-size: cover;
    padding: 0;
    margin: 0;
  }
  #button{
    margin-left: 5px;

  }
  #grid{
    margin-top: 20%;
    margin-left: 26%;
    border-style: outset;
    border-radius: 8px;
  }
  #tf{
    padding-right: 50%;
  }
</style>
</head>
<body>
  <!-- <form class="ui large form" method="post" action="proses.php">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" placeholder="Username" required>
            </div>
        </div>
      <div class="field">
        <div class="ui left icon input">
          <i class="lock icon"></i>
          <input type="password" name="password" placeholder="Password" required>
        </div>
      </div>
      <button class="ui inverted blue button">Login</button>
  </div>
      <div class="ui error message"></div> -->
</form>
</body>
</html>

<div class="ui grid container">
  <div class="eight wide column" id="grid">

<div class="ui form">
  <div class="inline field">
  <form action="proses.php" method="post">
    <label><i class="user icon"></i>Username</label><br>
    <input type="text" id="tf" name="username" placeholder="Username" required>
  </div>
	<div class="inline field">
    <label><i class="lock icon"></i>Password</label><br>
    <input type="password" id="tf" name="password" placeholder="Password" required>
  </div>
</div><br>
<button class="ui inverted blue button">Login</button>
<!-- <div class="ui error message"></div> -->
<br>
<!-- <button class="ui secondary button" id="button" type="submit" name="login">Sign Up</button> -->

<label>
 	<!-- <input class="ui secondary button" type="submit" name="login" type="login" required> -->
 	</label>
 	</form>
</div>
</div>
