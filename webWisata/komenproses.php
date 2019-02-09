<?php
include "connect.php";
session_start();

if(isset($_POST['comment'])) {
  $komen = $_POST['comment'];
  $user_id = $_SESSION['username'];
$sql="INSERT INTO `review` (`id`, `comment`, `user_id`, `wisata_id`) VALUES (NULL, '$komen', '$user_id', '1')";
$query = mysqli_query($meong, $sql);

header("Location:komen.php");
}

?>
