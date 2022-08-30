<?php
include ('connection.php');

if(isset($_POST['submit']) && isset($_POST['Name']) && isset($_POST['Phone']) && isset($_POST['mess'])){
    $Name = $_POST['Name'];
    $Phone = $_POST['Phone'];
    $mess = $_POST['mess'];
    $sql = "INSERT INTO `shakwet`(`UserName`, `phoneNb`, `mess`) VALUES ('$Name','$Phone','$mess')";

    $res = mysqli_query($conn, $sql);
    if($res){
        header("Location: index.php?Shakwe sended");
    }
}

if(isset($_POST['submit']) && isset($_POST['subs'])){
    $subs = $_POST['subs'];
    $query = "INSERT INTO `subscribers`(`Info`) VALUES ('$subs')";
    $res = mysqli_query($conn, $query);
    if($res){
        header("Location: index.php?sebscribed");
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
	header-img start 
	============================== -->
    <section id="hero-area">
      <img class="img-responsive" src="images/yama.jpg" alt="">
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
                                <li><a href="#hero-area">Home</a></li>
                                <li><a href="#about">About us</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#blog">Special</a></li>
                                <li><a href="#about-us2">Botolat</a></li>
                                <li><a href="#contact-us">Contact Us</a></li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
	</nav><!-- header close --> 
    
    <!--
    about-us start
    ============================== -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <p  class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">! ما في بكرا بلا ذكرى</p>
                        <p  class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">Coffee house & 90's game center</p>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #call-to-action close -->  

     <!--
    price start
    ============================ -->
    <section id="menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"><span>MENU - المنيو</span></h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">أطيب قهوة، وأحلى مكان</p>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">وأكل بشهي كتير</p>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">وعصير طيّب، أكتر بكتير</p>
                        <div class="pricing-list">
                            <a class="btn btn-default pull-right wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms" href="./menu.php" role="button">View</a>
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->
   
    
    <section id="blog" style="
  background: url(../images/sora5.JPG);
  
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading">Special</h1>
                        <p class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">لكل مشروب حكاية</p>
                        <p class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">Comming soon!</p>
                       
                   
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #blog close -->

    <section id="about-us2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="block">
                    <h1 class="heading" style="color: #2f4c60;">ورش - بطولات</h1>
                    </div> 
                    <div id='owl-example' class='owl-carousel'>
                           
                      <?php
                      #require_once 'connection.php';

                     # $sql = "SELECT * FROM `botola` ORDER BY `botola_id` DESC";
                     # $result = mysqli_query($conn, $sql);
                        #  while($row = mysqli_fetch_array($result)){
                        
                         #      echo "
                            #   <div>
                            #   <a href='post.php?Name=".$row['Botola_name']."&Image=".$row['Poster']."'><img class='img-responsive' src='images/".$row['Poster']."'></a>
                            #   </div> 
                          #}
                       ?>
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
                    <div class="pricing-list">
                            <a class="btn btn-default pull-right wow bounceIn"
                            style="
                            padding: 28px 105px;
                            margin:10px;
  border-radius: 0px;
  background: none;
  color: #2f4c60;
  border: 1px solid #F3950D;
  font-size: 15px;
  text-transform: uppercase;
  font-weight: 600;
  -webkit-transition: .3s all;
  -o-transition: .3s all;
  transition: .3s all;
                            "
                            data-wow-duration="500ms" data-wow-delay="1200ms" href="./7ajez.php" role="button">View</a>
                        </div>
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close --> 
    <!--
    CONTACT US  start
    ============================= -->
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">Contact Us</h1>
                        <p class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">جاهزين نسمع شكاويكم</p>
                        
                        <form action="" method="post">
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input style="color:white;" type="name" class="form-control" id="exampleInputEmail1" name="Name" placeholder="Full Name..." required>
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input style="color:white;" type="name" class="form-control" id="exampleInputEmail1" name="Phone" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
                                <textarea style="color:white;" class="form-control" rows="3" name="mess" placeholder="Write your message here..." required></textarea>
                            </div>
                        <button class="btn btn-default wow bounceIn" data-wow-duration="500ms" data-wow-delay="1300ms" name= "submit" type="submit" style="color:white; margin-bottom: 10px; float:right; background-color:#F3950D;">send your message</button>
                          
                    </form>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- #contact-us close -->
 
    <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4779.327495186541!2d35.42019430159951!3d33.39602199229785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151e933742d5c4ed%3A0x225d087a43a58cab!2z2YPYp9mGINmK2KfZhdinINmD2KfZhg!5e0!3m2!1sen!2slb!4v1649459473315!5m2!1sen!2slb"></iframe>
    </div>  
                            
    
    <!--
    subscribe start
    ============================ -->
    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class=" heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">Sajjel</h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">ليوصلك كل جديد عن نشاطاتنا</p>
                        <form class="form-inline" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputAmount" name="subs" placeholder="Full Name, Phone Number">
                                    <div class="input-group-addon">
                                        <button class="btn btn-default" name="submit" type="submit">subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #subscribe close --> 
    
  
  
    <!--
    footer  start
    ============================= -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                     
                    <div class="block wow fadeInLeft"  data-wow-delay="200ms">
                       
                        <h3>INFO</h3>
                        <div class="info">
                            <ul>
                                <li>
                                  <h4><i class="fa fa-phone"></i>Talephone</h4>
                                  <p>+961 76 090 301</p>
                                    
                                </li><br>
                                <li>
                                  <h4><i class="fa fa-map-marker"></i>Address</h4>
                                  <p>النبطية - طريق عام الدوير</p>
                                </li>
                                <li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                   
                </div>
                <!-- .col-md-4 close-->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                        
                        <div class="social-media-link">
                            <h3>Keep In <span>Touch</span></h3>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/kannyammakann">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.instagram.com/kann.yama.kann">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.link/j3f7lp">
                                        <i class="fa fa-phone"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> 
                <!-- .col-md-4 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
    <!--
    footer-bottom  start
    ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Design and Developed By Ali kanso -<a href="https://wa.link/7wlljk"> 71 742 350</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>

