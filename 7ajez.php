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
    <script type="text/javascript" src="js/gaming.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
	<body>
    
        <section id="contact-us2">
            <div class="container">
                <div class="row">
                            <h1 class="heading wow fadeInUp" style='color:#2f4c60;' data-wow-duration="500ms" data-wow-delay="300ms">Botolate</h1>
                    <div id="imageOf"  class="col-md-4">
                          
                        </div>
                            <div class="col-md-6">
                            <form action="" method="post">
                                <div style="margin-top: 15px; text-align: right;" class="form-group">
                                    <select class="form-control" id="gaming" onchange="select()" required>
                                        <option>اختر البطولة</option>
                                        <?php
                                        include_once ('connection.php');
                                        $sql = "SELECT * FROM `game`";
                                        $res = mysqli_query($conn, $sql);
                                        while($row = mysqli_fetch_assoc($res)){
                                        echo "<option value='".$row['name_Game']."'>".$row['name_Game']."</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="name" class="form-control" id="Name" placeholder="Full Name..." required>
                                </div>
                                <div class="form-group">
                                    <input type="name" class="form-control"  id="Phone" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="players" placeholder="Number of players" required>
                                </div>
                                <div>
                                <h4 style="float: right;">سوف تتم عملية الدفع</h4>
                                    <select class="form-control" id="By" required>
                                        <option value="OMT">OMT</option>
                                        <option value="مباشر">مباشر</option>
                                    </select>
                            </div>
                                <div class="form-group" >
                                    <h4 style="float: right;">برجاء تحديد المهلة التي سوف يتم الدفع فيها</h4>
                                    <select class="form-control" id="hours" required>
                                        <option value="24 hr">24 hrs</option>
                                        <option value=" 72 hr">72 hrs</option>
                                    </select>
                                </div>
                            <button class="btn btn-default" onclick="whatsapp()" type="submit" style="color:white; margin-bottom: 10px; float:right; background-color:#F3950D;">7ajez</button>
                        </form>
                    </div>
                                    </div>

                                    <script>
    function whatsapp(){
    var game = document.getElementById("gaming").value;
    var name = document.getElementById("Name").value;
    var phone = document.getElementById("Phone").value;
    var player = document.getElementById("players").value;
    var hours = document.getElementById("hours").value;
    var By = document.getElementById("By").value;
   
    var url = "https://wa.me/96171742350?text="
    +"Game Name : " +game+ "%0a"
    +"Full Name : " +name+ "%0a"
    +"Phone Number : " +phone+ "%0a"
    +"Number of Players : " +player+ "%0a"
    +"Due : " +hours+ "%0a"
    +"By: "+By; 

    window.open(url, '_blank').focus();
    }
    </script>
            </div><!-- .container close -->
        </section><!-- #contact-us close --> 

	</body>
</html>

