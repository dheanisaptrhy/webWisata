<?php
  include "connect.php";
  session_start();
    $title = "Edit Profil";
    $q = mysqli_query($meong, "SELECT * FROM pengguna WHERE username='$_SESSION[username]'");
  $data = mysqli_fetch_array($q);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <script
    src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
  	<link rel="stylesheet" href="css/style.css">
    <style type="text/css">
    	body{
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
  </body>
</html>
<div class="ui grid container">
  <div class="eight wide column" id="grid">

<div class="ui form">
  <div class="inline field">
  <form method="post" action="edit.php">
    <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">
    <label>Full Name</label><br>
    <input name="nama" type="text" value="<?php echo $data['nama']; ?>">
  </div>
	<div class="inline field">
    <label>Email</label><br>
    <input name="email" type="text" value="<?php echo $data['email']; ?>">
  </div>
  <div class="inline field">
    <label>Username</label><br>
    <input name="username" type="text" value="<?php echo $data['username']; ?>">
  </div>
  <div class="inline field">
    <label>Password</label><br>
    <input name="password" type="text" value="<?php echo $data['password']; ?>">
  </div>
  <div class="inline field">
    <label>Jenis Kelamin</label><br>
    <input name="jeniskelamin" type="text" value="<?php echo $data['jeniskelamin']; ?>">
  </div>
</div>
<br>
<!-- <button class="ui secondary button" id="button" type="submit" name="login">Sign Up</button> -->

<label>
 	<input class="ui secondary button" type="submit" name="submit" type="submit">
 	</label>
 	</form>
</div>
</div>
