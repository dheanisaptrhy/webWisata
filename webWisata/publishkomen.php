<?php
include "connect.php";
session_start();
$komen = mysqli_query("SELECT `comment` FROM `review` ORDER BY id DESC");
$commentNum = mysqli_num_rows($komen);


?>
