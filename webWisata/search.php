<?php
include 'connect.php';
$sql = 'select * from wisata';
$data = $meong->query($sql);
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
  /* <link rel="stylesheet" type="text/css" href="semantic.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css"> */
  body{
    margin: 0;
    padding: 10px;
  }
  #a{
    margin-left: 65px;
    margin-right: 65px;
    margin-bottom: 10px;
  }
    .pusher{
      margin-top: 25px;
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


  		<!-- <div class="ui button">Search</div> -->

<div class="ui grid" id="a">
  <div class="sixteen wide column"></div>
   <div class="sixteen wide column"></div>
    <div class="sixteen wide column">
    <form action="search.php" method="get">
      <div class="ui fluid action input">
      <input type="text" class="search" name="search" placeholder="Search...">
  <!-- <label>Cari :</label> -->

      <button class="ui button" type="submit" value="Search">Search</button>
      </div>
    </form>
  	</div>

    <?php
    if(isset($_GET['search'])){
      $search = $_GET['search'];
      echo "<b>Hasil pencarian ".$search."</b>";
    }
    ?>

<div class="sixteen wide column"></div>


<?php
if(isset($_GET['search'])){
    $cari = $_GET['search'];
    $data = mysqli_query($meong, "select * from wisata where nama_wisata like '%".$search."%'");
  }else{
    $data = mysqli_query($meong, "select * from wisata");
  }
  $no = 1;
  while($row = $data->fetch_object()){
  echo <<< END
          <div class="ui items">
  <div class="item">
    <div class="ui small image">
      <img src="img/$row->id.jpg">
    </div>
    <div class="middle aligned content">
      <div class="header">$row->nama_wisata
      </div>
      <div class="description">
      $row->namaKategori
        <p></p>
      </div>
      <div class="extra">
        <div class="ui right floated button">
          See more
        </div>
      </div>
    </div>
  </div>

END;
}
?>
</div>
 <div class="ui grid" id="a">
   <div class="sixteen wide column"></div>
    <div class="sixteen wide column"></div>
      <div class="sixteen wide column">
        <div class="ui items">
<?php

      while ($row = $data->fetch_object()) {
          echo <<< END
          <div class="ui items">
  <div class="item">
    <div class="ui small image">
      <img src="img/$row->id.jpg">
    </div>
    <div class="middle aligned content">
      <div class="header">$row->nama_wisata
      </div>
      <div class="description">
      $row->namaKategori
        <p></p>
      </div>
      <div class="extra">
        <div class="ui right floated button">
          See more
        </div>
      </div>
    </div>
  </div>
END;
        }

        ?>
<!-- <table border="1">
  <tr>
    <th>No</th>
    <th>Nama</th>
  </tr> -->
<!-- <?php
  if(isset($_GET['search'])){
    $cari = $_GET['search'];
    $data = mysqli_query($kon, "select * from wisata where nama_wisata like '%".$search."%'");
  }else{
    $data = mysqli_query($kon, "select * from wisata");
  }
  $no = 1;
  while($d = mysqli_fetch_array($data)){
  ?>
  <tr>
    <td><?php //echo $no++; ?></td>
    <td><?php //echo $d['nama_wisata']; ?></td>
  </tr -->
  <?php } ?>
<!-- </table> -->
</div>
</div>
</div>
</div>
</body>

<!--
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script> -->
<script>
   $('#toggle').click(function(){
    $('.ui.sidebar').sidebar('toggle');
   });
</script>

</html>
