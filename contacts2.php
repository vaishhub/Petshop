<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>Petshop Online Website</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->
        
<!--*********************************************START OF NAVIGATION BAR****************************************--> 
<body>
          
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;"> 
                    <img src="images/animal-care_8767104.png"  width="5% "/> Pawfect Pet Store</h4>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li><a href="index2.php"><i class="fa fa-home"></i>Home</a></li>
                        <li ><a href="about-us2.php">About Us</a></li>
                        <li ><a href="available.php">Purchase Here</a></li>
                        <li ><a href="disease.php">View Diseses</a></li>
                        <li class="active"><a href="contacts2.php">Contacts</a></li>
                                                          
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
<!--*********************************************START OF CONTACT INFO****************************************-->
<body>
<br><br>
<div class="container">
        <section id="Contact-info">
                <center><span style="font-size:35px; font-weight:bold; font-family:verdana; color:blue;">How to Reach Us?</span></center>
                <br>
                <br>


            <div class="left wow fadeInDown">
            <br>

               <div class="col-md-6">
                <img src="images/telephone_6053941.png"   width="45%" class="img-responsive pull-right" />
               </div> 
               <div class="col-md-6">
                <p class="lead">
                    <br>
                    <p><span style="font-size:20px; font-weight:bold; font-family:verdana; color:red;">Our Team</span>
                   
                    <br><b>Vaishnavi Nikam:</b> vaishnavinikam3102@gamil.com<b><br>Vaishnavi Mandhare :</b> vaishnavimandhare123@gamil.com<b><br>Pranita Bhosale:</b>  pranitabhosale3242@gamil.com</p>
                    <hr>

                    <p><span style="font-size:20px; font-weight:bold; font-family:verdana; color:red;">Contacts</span>
                    <br><b>Vaishnavi Nikam:</b>7446633102
                    <br><b>Vaishnavi Mandhare:</b> 8463745632<br>
                    <b>Pranita Bhosale:</b>8440048662</p>
                    <hr>
                    <span style="font-size:20px; font-weight:bold; font-family:verdana; color:Violet;">We are open</span>
                    <p><b>MONDAY TO FRIDAY -- 8:00AM - 5:00PM</b></p>
                </p>
                <hr>
                <table style="width:80px;">
                    <tr>
                        <td><a href="http://www.facebook.com"><img data-toggle="tooltip" src="images/ico/Facebook.png" class="img-responsive" /></a></td>
                        <td><a href="http://www.instagram.com"><img src="images/ico/icons_Instagram.png" class="img-responsive" /></a></td>
                        <td><a href="http://www.twitter.com"><img src="images/ico/Twitter.png" class="img-responsive" /></a></td>
                        <td><a href="http://www.youtube.com"><img src="images/ico/YouTube.png" class="img-responsive" /></a></td>
                    </tr>
                </table>

                </div>
            </div>
        
        </section>
</div>
<br><br>
<!--*************************************************** FOOTERS **********************************************-->

<?php include('includes/footer.php');?><!--/#footer-->
    <?php include('loginModal.php')?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>