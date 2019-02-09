<?php
  include "connect.php";
  session_start();
  if(isset($_POST['comment'])) {
    $komen = $_POST['comment'];
    $user_id = $_SESSION['username'];
  $sql="INSERT INTO `review` (`id`, `comment`, `user_id`, `wisata_id`) VALUES (NULL, '$komen', '$user_id', '1')";
  $query = mysqli_query($meong, $sql);
  if($query){
    echo "hore";
  }

  }
  // $comment = $_POST['comment'];
  $user_id = $_SESSION['username'];
  // $sql = "INSERT INTO `review` (`id`, `comment`, `user_id`, `wisata_id`) VALUES ('', '$comment', '$user_id', '1')";
  // $query = mysqli_query($meong, $sql);
  $q = mysqli_query($meong, "SELECT *  FROM `review` WHERE `wisata_id` = 1");

  // $w = mysqli_query($meong, "SELECT *  FROM `pengguna` JOIN `wisata`");
  // $data_1 = mysqli_fetch_array($w);
  //
  // echo $data_1['username']."<br>";
  while($data = mysqli_fetch_array($q) ){
  echo $user_id."<br>";
  echo $data['comment']."<br>";

  // $sql = "INSERT INTO `review` (`comment`,`user_id`, `wisata_id`) VALUES ('$comment','$user_id', 1)";
	// $query = mysqli_query($meong, $sql);
}
?>
<form action="komen.php" method="post">
  <input type="text" id="tf" name="comment" placeholder="Comment" required>
</div>
<label>
 	<input class="ui secondary button" type="submit" name="submit" required>
 	</label>
 	</form>

  <?php
  // echo $data['comment'];
  ?>
