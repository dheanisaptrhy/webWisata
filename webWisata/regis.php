<?php
include 'connect.php';
if(isset($_POST['email'])) {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$jeniskelamin = $_POST['jeniskelamin'];

	$sql = "INSERT INTO `pengguna` (`nama`,`email`,`username`, `password`, `jeniskelamin`) VALUES ('$nama','$email','$username', '$password', '$jeniskelamin')";
	$query = mysqli_query($meong, $sql);
	if ($query) {
	 	echo "Data sukses di masukkan! <a href='login.php'>Login</a>";
		header("Location: login.php");
	 }else{
	 	echo "Data tidak bisa dimasukan!";
	 }
	}
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
			background-image: url(foto/ba2.jpg);
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
  		padding-right: 70%;

  	}
  </style>
</head>
<body>

</body>
</html>
<div class="ui grid container">
  <div class="eight wide column" id="grid">

<div class="ui form">
  <form action="regis.php" method="post">
		  <div class="inline field">
    <label>E-mail</label><br>
    <input type="text" id="tf" name="email" placeholder="Email" required>
  </div>
	<div class="inline field">
    <label>Full Name</label><br>
    <input type="text" id="tf" name="nama" placeholder="Full name" required>
  </div>
  <div class="inline field">
    <label>Username</label><br>
    <input type="text" id="tf" name="username" placeholder="Username" required>
  </div>
  <div class="inline field">
    <label>Password</label><br>
    <input type="password" id="tf" name="password" placeholder="Password" required>
  </div>
  <div class="inline field">
    <label>Jenis Kelamin</label><br>
    <input type="text" id="tf" name="jeniskelamin" placeholder="Jenis Kelamin" required>
  </div>
</div>
<br>
<!-- <button class="ui secondary button" id="button" type="submit" name="login">Sign Up</button> -->

<label>
 	<input class="ui secondary button" type="submit" name="login" type="login" required>
 	</label>
 	</form>
</div>
</div>
