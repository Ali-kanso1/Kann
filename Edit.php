<?php
include ('connection.php');
if(isset($_POST['update'])){

    $itemN = $_GET['ItemName'];
    $price = $_POST['newPrice'];

$sql = "UPDATE `items` SET  `price`='$price' WHERE `name` = '$itemN'";
$ress = mysqli_query($conn, $sql);
if($ress){
    header("Location: ./Admin.php?PriceUpdated");
}


}

if(isset($_POST['delete'])){
    $itemN = $_GET['ItemName'];

$sql = "DELETE FROM `items` WHERE `name` = '$itemN'";
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
                <h1  class="heading" style="color: white;"><span><?php echo $_GET['ItemName']?><span></h1>
                <h4>Old Price : <span><?php echo $_GET['Price']?><span></h4>
                <form method="POST" enctype="multipart/form-data">
                  <p>Set New Price:</p><input type="text" name="newPrice" required/><br>
                 <button name="update">Update</button><br>
                 <p>Or Delete Item:</p><br><button name="delete">Delete</button>
</form>
               
              </div>
              </div>
          </div><!-- .col-md-12 close -->
      </div><!-- .row close -->
  </div><!-- .containe close -->
</section><!-- #price close -->

	</body>
</html>

