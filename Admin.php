<?php
include ('connection.php');


if(isset($_POST['addGames']))
{

            $target = "images/".basename($_FILES['imageGame']['name']);

            $game = $_POST['GameName'];
            $Game = $_FILES['imageGame']['name'];

           


    $query = "INSERT INTO `game`( `image_Game`, `name_Game`) VALUES ('$Game','$game')";
    $result = mysqli_query($conn, $query);
    if(move_uploaded_file($_FILES['imageGame']['tmp_name'], $target)){
      header("Location: Admin.php?Game Uploaded successfuly");
    }
}

?>
<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<title>Kann Yama Kann</title>
        <link rel="icon" href="images/iconKan.png"/>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS
        ================================================ -->
        <!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.css">
        <!-- bootstrap.min css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/animate.min.css">

		<link rel="stylesheet" href="css/main.css">
        <!-- Responsive Stylesheet -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="js/load.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
	</head>
	<body>
	<!--
	header-img start 
	============================== -->
    <section id="hero-area">
      <a href="index.php"><img class="img-responsive" src="images/yama.jpg" alt=""></a>
    </section>
	<!--
    Header start 
	============================== -->
	<nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                                  

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right" id="top-nav">
                                <li><a href="#Adminmenu" >Menu</a></li>
                                <li><a href="#Botola">Botolat</a></li>
                                <li><a href="#Users">Users</a></li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
	</nav><!-- header close -->


<!--GAMESSSS-->
<section id="Botola" style="background-color: #2f4c60;">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="block">
                <h1  class="heading wow fadeInUp" style="color: white;" data-wow-duration="300ms" data-wow-delay="300ms">Add Game</h1>
                <form method="POST" enctype="multipart/form-data" >
                  <input  type="text" name="GameName" placeholder="Name"/>
                  <input style="color:white;"  type="file" name="imageGame"/>
                 <button name="addGames">Add</button>
                </form>
              </div>
              <div class="block">
                <h1  class="heading wow fadeInUp" style="color: white;" data-wow-duration="300ms" data-wow-delay="300ms">Delete Game</h1>
                <form method="POST" enctype="multipart/form-data">
                  <select style="margin-top:30px;" name="bb">
                <?php
                
$sqly = "SELECT `name_Game` FROM `game`";
$resl = mysqli_query($conn, $sqly);
                       while($row = mysqli_fetch_array($resl)){
                         ?>
                         <option value="<?php echo $row['name_Game']; ?>" > <?php echo $row['name_Game']; ?> </option>
                         <?php
                       }
                       ?>
                    </select>
                 <button name="DeleteGames">Delete</button>
                </form>
                
              </div>
              </div>
          </div><!-- .col-md-12 close -->
      </div><!-- .row close -->
  </div><!-- .containe close -->
</section><!-- #price close -->

	</body>
</html>

