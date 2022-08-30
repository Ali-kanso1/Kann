<?php
include ('connection.php');

if(isset($_POST['delete'])){
    $user = $_GET['UserName'];

$sql = "DELETE FROM `Shakwet` WHERE `UserName` = '$user'";
$res = mysqli_query($conn, $sql);
if($res){
    header("Location: ./Admin.php?DeletedSuccessfully");
}

}
?>
<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	============================== 
    <section id="hero-area">
      <img class="img-responsive" src="images/yama.jpg" alt="">
    </section>-->
	
  <section id="Adminmenu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="block">
                <h4  class="heading" style="color: white;"><span><?php echo $_GET['UserName']?><span></h4>
                <center><p style="font-size:30px;"><span><?php echo $_GET['Phone']?><span></p><br/><br/>
                <p style="font-size:20px;"><span><?php echo $_GET['Message']?><span></p></center>
                <form method="POST" enctype="multipart/form-data">
                    <br><button name="delete">Delete</button>
                </form>
              </div>
              </div>
          </div><!-- .col-md-12 close -->
      </div><!-- .row close -->
  </div><!-- .containe close -->
</section><!-- #price close -->

	</body>
</html>

