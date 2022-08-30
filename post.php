
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
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
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
    price start
    ============================ -->
    <section id="post">
        <div class="container">
        <a href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" width="40" fill="#F3950D" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></a>
            <div class="row">
            <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="block">
                        <?php 
                        echo "<h1 class='heading wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'><span>".$_GET['Name']."</span></h1>";
                       ?>
                        <div class="row">
<center>
    <?php
echo "<img class='img-responsive' style='width:300px;' src='images/".$_GET['Image']."'>"
?>
</center>
                        </div>
                    </div>
                    <div class="imgs">
                        <center>
                            <?php
                            include('connection.php');
                            $images = $_GET['Name'];
                            $sql = "SELECT `imagePoB` FROM `botola`, `posts` WHERE posts.botolaName = botola.Botola_name AND botola.Botola_name = '$images'";
                            $res=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($res)){
                            echo "<div>
                            <img class='img-responsive' src='images/".$row['imagePoB']."'>
                            </div>";}?></center>
                    </div>
                </div>
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->


	</body>
</html>