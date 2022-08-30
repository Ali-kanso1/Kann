
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
	<body style="background-color:#2f4c60;">


<!--
    price start
    ============================ -->
    <section id="price">
        <div class="container">
        <a href="./index.php"><svg xmlns="http://www.w3.org/2000/svg" width="40" fill="#F3950D" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></a>
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"><span>MENU - المنيو</span></h1>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->

<section id="price">
   <?php  require_once 'connection.php';

$sql = "SELECT Osom, osomArabic FROM Aksam WHERE code='Tab' ";
$result = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($result)){
    echo "
                    <div style='padding:20px;' class='block'>
                    
<h1 class='heading wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
<span>".$row['Osom']. " - ".$row['osomArabic']. "</span></h1>
<div class='pricing-list'>";
      $sql = "SELECT * FROM items WHERE kosom_code = 'Tab'";
if($result = mysqli_query($conn,$sql)){
  while($row = mysqli_fetch_assoc($result)){
                       echo"  <ul>
                         <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms'>
                                    <div class='item'>
                                        <div class='item-title'>
   <div>                                     
<h2>".$row['name']."</h1>
<h2 style='float:right;'>".$row['nameArabic']."</h2>
 <div class='border-bottom'></div><br>
 <span style='float: right;'>".$row['price']." L.L.</span>
 <div>
 <p>".$row['descrip']."</p>
 </div>
 </li>
 </ul>";
  }
}
  " </div>";
  }
    ?>
   

   <?php  require_once 'connection.php';

$sql = "SELECT Osom, osomArabic FROM Aksam WHERE code='Break' ";
$result = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($result)){
    echo "
    <div style='padding:20px;' class='block'>
    
<h1 class='heading wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
<span>".$row['Osom']. " - ".$row['osomArabic']. "</span></h1>
<div class='pricing-list'>";
$sql = "SELECT * FROM items WHERE kosom_code = 'Break' ";
if($result = mysqli_query($conn,$sql)){
    while($row = mysqli_fetch_assoc($result)){
        echo"  <ul>
          <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms'>
                     <div class='item'>
                         <div class='item-title'>
<div>                                     
<h2>".$row['name']."</h1>
<h2 style='float:right;'>".$row['nameArabic']."</h2>
<div class='border-bottom'></div><br>
<span style='float: right;'>".$row['price']." L.L.</span>
<div>
<p>".$row['descrip']."</p>
</div>
</li>
</ul>";
}}
  "</div>";
  }
    ?>

<?php  require_once 'connection.php';

$sql = "SELECT Osom, osomArabic FROM Aksam WHERE code='Pizza' ";
$result = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($result)){
    echo "
                    <div style='padding:10px;' class='block'>
                    
<h1 class='heading wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
<span>".$row['Osom']. " - ".$row['osomArabic']. "</span></h1>";
$sql = "SELECT * FROM items WHERE kosom_code = 'Pizza' ";
if($result = mysqli_query($conn,$sql)){
    while($row = mysqli_fetch_assoc($result)){
        echo"  <ul>
          <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms'>
                     <div class='item'>
                         <div class='item-title'>
<div>                                     
<h2>".$row['name']."</h1>
<h2 style='float:right;'>".$row['nameArabic']."</h2>
<div class='border-bottom'></div><br>
<span style='float: right;'>".$row['price']." L.L.</span>
<div>
<p>".$row['descrip']."</p>
</div>
</li>
</ul>";
}}
  "</div> ";
  }
    ?>

<?php  require_once 'connection.php';

$sql = "SELECT Osom, osomArabic FROM Aksam WHERE code='Snack' ";
$result = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($result)){
    echo "
                    <div style='padding:20px;' class='block'>
                    
<h1 class='heading wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
<span>".$row['Osom']. " - ".$row['osomArabic']. "</span></h1>";
$sql = "SELECT * FROM items WHERE kosom_code = 'Snack' ";
if($result = mysqli_query($conn,$sql)){
  while($row = mysqli_fetch_assoc($result)){

      echo "<div class='pricing-list'>
                         <ul>
                         <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms'>
                                    <div class='item'>
                                        <div class='item-title'>
                                        
<h2>".$row['name']."</h1>
<h2 style='float: right;'>".$row['nameArabic']."</h2>
 <div class='border-bottom'></div>
 <p>".$row['descrip']."</p>
 <span style='float: right;'>".$row['price']." L.L.</span>
 </div>
 </li>
 </ul>
 </div>";
  }}
  "</div>";
  }
    ?>

<?php  require_once 'connection.php';

$sql = "SELECT Osom, osomArabic FROM Aksam WHERE code='Dess' ";
$result = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($result)){
    echo "
                    <div class='block'>
                    
<h1 class='heading wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
<span>".$row['Osom']. " - ".$row['osomArabic']. "</span></h1>";
$sql = "SELECT * FROM items WHERE kosom_code = 'Dess' ";
if($result = mysqli_query($conn,$sql)){
  while($row = mysqli_fetch_assoc($result)){

      echo "<div class='pricing-list'>
                         <ul>
                         <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms'>
                                    <div class='item'>
                                        <div class='item-title'>
                                        
<h2>".$row['name']."</h1>
<h2 style='float: right;'>".$row['nameArabic']."</h2>
 <div class='border-bottom'></div>
 <p>".$row['descrip']."</p>
 <span style='float: right;'>".$row['price']." L.L.</span>
 </div>
 </li>
 </ul>
 </div>";
  }}
  "</div> ";
  }
    ?>

<?php  require_once 'connection.php';

$sql = "SELECT Osom, osomArabic FROM Aksam WHERE code='HotD' ";
$result = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($result)){
    echo " 
                    <div style='padding:20px;' class='block'>
                    
<h1 class='heading wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
<span>".$row['Osom']. " - ".$row['osomArabic']. "</span></h1>";
$sql = "SELECT * FROM items WHERE kosom_code = 'HotD' ";
if($result = mysqli_query($conn,$sql)){
  while($row = mysqli_fetch_assoc($result)){

      echo "<div class='pricing-list'>
                         <ul>
                         <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms'>
                                    <div class='item'>
                                        <div class='item-title'>
                                        
<h2>".$row['name']."</h1>
<h2 style='float: right;'>".$row['nameArabic']."</h2>
 <div class='border-bottom'></div>
 <p>".$row['descrip']."</p>
 <span style='float: right;'>".$row['price']." L.L.</span>
 </div>
 </li>
 </ul>
 </div>";
  }}
  "</div> ";
  }
    ?>

<?php  require_once 'connection.php';

$sql = "SELECT Osom, osomArabic FROM Aksam WHERE code='Juice' ";
$result = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($result)){
    echo " 
                    <div style='padding:20px;' class='block'>
                    
<h1 class='heading wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
<span>".$row['Osom']. " - ".$row['osomArabic']. "</span></h1>";
$sql = "SELECT * FROM items WHERE kosom_code = 'Juice' ";
if($result = mysqli_query($conn,$sql)){
  while($row = mysqli_fetch_assoc($result)){

      echo "<div class='pricing-list'>
                         <ul>
                         <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms'>
                                    <div class='item'>
                                        <div class='item-title'>
                                        
<h2>".$row['name']."</h1>
<h2 style='float: right;'>".$row['nameArabic']."</h2>
 <div class='border-bottom'></div>
 <p>".$row['descrip']."</p>
 <span style='float: right;'>".$row['price']." L.L.</span>
 </div>
 </li>
 </ul>
 </div>";
  }}
  "</div>";
  }
    ?>

<?php  require_once 'connection.php';

$sql = "SELECT Osom, osomArabic FROM Aksam WHERE code='ColdD' ";
$result = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($result)){
    echo " 
                    <div style='padding:20px;' class='block'>
                    
<h1 class='heading wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
<span>".$row['Osom']. " - ".$row['osomArabic']. "</span></h1>";
$sql = "SELECT * FROM items WHERE kosom_code = 'ColdD' ";
if($result = mysqli_query($conn,$sql)){
  while($row = mysqli_fetch_assoc($result)){

      echo "<div class='pricing-list'>
                         <ul>
                         <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms'>
                                    <div class='item'>
                                        <div class='item-title'>
                                        
<h2>".$row['name']."</h1>
<h2 style='float: right;'>".$row['nameArabic']."</h2>
 <div class='border-bottom'></div>
 <p>".$row['descrip']."</p>
 <span style='float: right;'>".$row['price']." L.L.</span>
 </div>
 </li>
 </ul>
 </div>";
  }}
  "</div>";
  }
    ?>

<?php  require_once 'connection.php';

$sql = "SELECT Osom, osomArabic FROM Aksam WHERE code='Spec' ";
$result = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($result)){
    echo "
                    <div style='padding:20px;' class='block'>
                    
<h1 class='heading wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
<span>".$row['Osom']. " - ".$row['osomArabic']. "</span></h1>";
$sql = "SELECT * FROM items WHERE kosom_code = 'Spec' ";
if($result = mysqli_query($conn,$sql)){
  while($row = mysqli_fetch_assoc($result)){

      echo "<div class='pricing-list'>
                         <ul>
                         <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms'>
                                    <div class='item'>
                                        <div class='item-title'>
                                        
<h2>".$row['name']."</h1>
<h2 style='float: right;'>".$row['nameArabic']."</h2>
 <div class='border-bottom'></div>
 <p>".$row['descrip']."</p>
 <span style='float: right;'>".$row['price']." L.L.</span>
 </div>
 </li>
 </ul>
 </div>";
  }}
  "</div>";
  }
    ?>

<?php  require_once 'connection.php';

$sql = "SELECT Osom, osomArabic FROM Aksam WHERE code='Shisha' ";
$result = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($result)){
    echo "
                    <div style='padding:20px;' class='block'>
                    
<h1 class='heading wow fadeInUp' data-wow-duration='300ms' data-wow-delay='300ms'>
<span>".$row['Osom']. " - ".$row['osomArabic']. "</span></h1>";
$sql = "SELECT * FROM items WHERE kosom_code = 'Shisha' ";
if($result = mysqli_query($conn,$sql)){
  while($row = mysqli_fetch_assoc($result)){

      echo "<div class='pricing-list'>
                         <ul>
                         <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms'>
                                    <div class='item'>
                                        <div class='item-title'>
                                        
<h2>".$row['name']."</h1>
<h2 style='float: right;'>".$row['nameArabic']."</h2>
 <div class='border-bottom'></div>
 <p>".$row['descrip']."</p>
 <span style='float: right;'>".$row['price']." L.L.</span>
 </div>
 </li>
 </ul>
 </div>";
  }}
  "</div>";
  }
    ?>
    </section>
	</body>
</html>