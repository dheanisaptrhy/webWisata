<?php
include "connect.php";
session_start();
$q = mysqli_query($meong,"SELECT * FROM wisata");
$data = mysqli_fetch_array($q);

  if(isset($_POST['comment'])) {
  $q = mysqli_query($meong, "SELECT *  FROM `review` WHERE `wisata_id` = 1");
  $data = mysqli_fetch_array($q);
  $w = mysqli_query($meong, "SELECT *  FROM `pengguna` JOIN `wisata`");
  $data_1 = mysqli_fetch_array($w);

  echo $data_1['username']."<br>";
  echo $data['comment'];

  $comment = $_POST['comment'];
  $user_id = $_SESSION['ID'];
  $sql = "INSERT INTO `review` (`comment`,`user_id`, `wisata_id`) VALUES ('$comment','$user_id', 1)";
	$query = mysqli_query($meong, $sql);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
  body{
    margin: 0;
    padding: 0;
    margin-bottom: 10px;
  }
  #a{
    background-image: url(foto/7.jpg);
    background-size: cover;
    opacity: 0.8;
    height: 350px;
    width: 100%;
    position: relative;
    display: block;
  }
  #b{
    margin-left: 30px;
    margin-top: 270px;
    font-size: 50px;
    color: white;
  }

    .pusher{
      margin-top: 55px;
    }


  </style>
</head>
<body>
<div class="ui sidebar vertical left inverted menu">
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
<div class="ui grid" id="a">
<div class="sixteen wide column" id="b">
    Coban Talun
    </div>
</div>
<div class="ui grid" >
<div class="sixteen wide column" >
    <div class="ui segment" style="font-size: 17px; font-family: Comic Sans MS">
      <?php echo $data['deskripsi'];?>
    </div>
  </div>
  <div class="a" style="margin-left: 20px; font-size: 20px; font-family: Comic Sans MS">Give It Rate
  </div>

  <div class="ui large star rating" data-rating="3" data-max-rating="5" style="margin-left: 10px">
    <br>
  </div>
  <div class="sixteen wide column"></div>
  </div>
  <div class="sixteen wide column"></div>
  <div class="sixteen wide column">
    <p style="margin-left: 25px; font-size: 20px; font-family: Comic Sans MS">Comment</p>
  <div class="ui comments" style="margin-left: 20px; font-family: Comic Sans MS; margin-bottom: 40px">
  <div class="comment">
    <form action="komenproses.php" method="post" class="ui reply form" name="comment" placeholder="Comment">
    <div class="field">
      <textarea type="text" id="tf" name="comment"></textarea>
    </div>
    <div class="ui right floated primary submit labeled icon button">
    </div>
  </form>
  <br><br><br><br>
    <a class="avatar">
      <img src="foto/1.jpg">
    </a>
    <div class="content">
      <a class="author">nama</a>
      <div class="metadata">
        <div class="date">1 day ago</div>
      </div>
      <div class="text">
        <p>The hours, minutes and seconds stand as visible reminders that your effort put them all there. </p>
        <p>Preserve until your next run, when the watch lets you see how Impermanent your efforts are.</p>
      </div>
      <div class="actions">
        <a class="reply">Reply</a>
      </div>
    </div>
  </div>
  <div class="comment">
    <a class="avatar">
      <img src="foto/7.jpg">
    </a>
    <div class="content">
      <a class="author">Christian Rocha</a>
      <div class="metadata">
        <div class="date">2 days ago</div>
      </div>
      <div class="text">
        I re-tweeted this.
      </div>
      <div class="actions">
        <a class="reply">Reply</a>
      </div>
    </div>
  </div>

</div>
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
<script>
  $('.ui.rating')
  .rating()
;
</script>
</html>
