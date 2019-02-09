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
    background-image: url(foto/8.jpg);
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
    p{
      text-align: justify;
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
  <a href="homepage.php" class="item">Logout</a>
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
    Pemandian Air Panas Songgoriti
    </div>
</div>
<div class="ui grid" >
<div class="sixteen wide column" >
    <div class="ui segment" style="font-size: 17px; font-family: Comic Sans MS">
      <p>Pemandian Air Panas Songgoriti adalah salah satu obyek wisata bahari yang terletak di desa Songgokerto, Kabupaten Batu, di bawah lereng bukit Gunung Panderman dan memiliki kolam air panas. Ada kuil Songgoriti dan Patung Ganesha sebagai kelalaian kerajaan Singosari dan zaman Belanda. Kuil Songgoriti terletak di sebuah dale yang memisahkan antara pegunungan Arjuna dengan gunung Kawi. Candi ini telah dibangun dengan mata air panas, yang diyakini bisa menyembuhkan berbagai penyakit. Dilihat dari gaya arsitekturnya yang sederhana, candi ini tergolong candi tertua di Jawa Tengah dan disainnya menggambarkan Jawa Tengah. Objek wisata Songgoriti ini dikelilingi oleh pemandangan alam, sehingga memiliki udara segar dan sejuk. Objek ini sangat menarik bagi siapa saja yang ingin berkeliling karena santai atau merasakan nuansa alamiah. Dan tentu saja hal yang paling banyak diminati oleh para wisatawan di tempat ini sendiri adalah kolam pemandian air panasnya. Dari sumber air panas yang ada di bawah Candi Songgoroti lalu dialirkan menuju ke pemandian denagn pipa. Konon sejarahnya sumber tersebut dulunya dipakai untuk mensucikan keris pusaka milik Raja Sindoh yaitu Raja kerajaan Singosari pada abad ke-5 M.

Selain bisa menikmati kolam pemandiannya, anda juga bisa memanfaatkan wahana outbound yang tersedia, ada juga taman-taman yang mempesona dan juga anda bisa ziarah ke makam Empu Supo dan mbah Pathok yang mempunyai sejarah tersendiri. Jika anda gemar berbelanja, anda juga bisa datang ke pasar wisata yang ada di Songgoriti yang menjual berbagai pernak-pernik dan oleh-oleh khas Malang. Di sana juga ada sebuah danau yang bisa anda nikmati pemandangannya dengan berkeliling menggunakan sepeda air.</p>
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
    <form class="ui reply form">
    <div class="field">
      <textarea></textarea>
    </div>
    <div class="ui right floated primary submit labeled icon button">
      <i class="icon edit"></i> Add Comment
    </div>
  </form>
  <br><br><br><br>
    <a class="avatar">
      <img src="foto/8.jpg">
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
