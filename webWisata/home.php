<?php
include 'connect.php';
session_start();
if(isset($_SESSION['username'])) {
header('location:proses.php'); }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="semantic.min.css">
	<style type="text/css">
  body{
    margin:0;
    padding: 0;
    width: 100%;
  	height: 100%;
  }
  #a{
  	margin-top: 12px;
  	background-image:url(foto/ba3.jpg);
  	height: 60px;
  	width: 100%;
  }
  #b{

  }
</style>
</head>
<body>
<div class="ui grid" id="b">
	<div class="sixteen wide column" id="a"></div>	<div class="sixteen wide column"></div>
	<div class="one wide column"></div>
  	<div class="fourteen wide column">
  		<div class="ui fluid action input" style="margin-top: 24px;">
  		<input type="text" placeholder="Search...">
  		<div class="ui button">Search</div>
		</div>
  	</div>
  	<div class="one wide column"></div>
  	<div class="one wide column"></div>
  	<div class="ten wide column" >
  		<div class="ui message"style="height: 420px;background-image: url(foto/ba1.jpg); margin-bottom: 20px; margin-top: 10px">
  		<p style="text-align: left; font-family: Traditional Arabic; font-size:50px;color: teal ;">WELCOME TO INFORMATIC EXCURSION SITE</p><br>
  		<p style="text-align: right;font-size:40px;color: teal; font-family: Traditional Arabic; font-style: bold">FIND YOUR DESTINATION</p>
		</div>
  	</div>
  	<div class="four wide column">
		<div class="ui middle aligned center aligned grid">
  			<div class="column">
      			<div class="content" style="font-style: bold;font-size: 20px; font-family: Comic Sans MS; color: lightblue">
       				Log-in to your account
      			</div><br>
    				<form class="ui large form" method="post" action="proses.php">
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
      					<div class="ui error message"></div>
    			</form>

    		<div class="ui message">
     			New to us? <a href="regis.php">Sign Up</a>
    		</div>
  			</div>
		</div>
	</div>
	<div class="one wide column"></div>	<div class="sixteen wide column"></div>
	<div class="sixteen wide column" id="a"></div>
</div>
</body>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
<script
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<style type="text/css"></style>
</html>
