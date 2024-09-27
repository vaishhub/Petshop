<?php
    session_start();

    if (!isset($_SESSION['UserName'])){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>Pet Shop Website</title>
  
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
                        
                         <li class="active"><a href="index2.php"><i class="fa fa-home"></i>Home</a></li>
                        <li ><a href="about-us2.php">About Us</a></li>
                        <li ><a href="available.php">Purchase Here</a></li>
                        <li ><a href="disease.php">View Diseses</a></li>
                        <li><a href="contacts2.php">Contacts</a></li>
                        <li><a href="Feedback New/index.php">Feedback</a></li>
                        <img src="images/logout.png" width="3%">      <li><a href="index.php">Logout</a></li>
                        
                                                               
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

<!--*********************************************START SLIDER************************************************-->

<div class="container-fluid">
    <br>
        <div class="col-md-9 wow fadeInDown">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="background-color:#000; padding:10px;">
              <!-- Indicators -->
             
              <!-- Wrapper for slides -->
              <div class="">

                <div class="">
                  <img src="images/main_puppies_1280p.jpg" width="100%">
                </div>
                
               
              </div>
                              
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>

<!--*********************************************Food PACKAGES************************************************-->
 
            
               
            </div>

        <div class="col-md-3" >
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
            
              <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Welcome To Our Petshop<i class="glyphicon glyphicon-calendar"></i> <?php echo date('M d, Y');?></div>
            
            </div>
         
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
              <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Petshop On Special Offer </div>
              <ul class="list-group"> <br> <br>
               
              <li class="list-group-item wow fadeInDown">Dog - <span style="color:#8B8B00; font-weight:bold;">Rs. 10,000 to 20,600 </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                  <li class="list-group-item wow fadeInDown">Bird  - <span style="color:#8B8B00; font-weight:bold;">Rs. 23,300 to 15,450 </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                  
                   

            <br>
            <br>
            <br>

              </ul>
              <a href="available.php" class="btn btn-success btn-sm pull-right wow fadeInDown">Click here to View More</a>
              
            </div>
            
            <br>
                <div class="panel panel-default wow fadeInDown">
                    <div class="panel-heading wow fadeInDown" style="font-size:16px; font-weight:bold; color: #36648B;">Our Location</div> <br> <br>
                </div>

                    <div class="recent-work-wrap class="wow fadeInDown"">
                        <img class="img-responsive wow fadeInDown" src="images/map.jpg" alt="">
                       
                            <div class="recent-work-inner">
                                <a class="preview wow fadeInDown" href="images/map1.jpg" rel="prettyPhoto"><br><span class="btn btn-success btm-sm pull-right">Preview Map</span></a>
                            </div> 
                    </div>
                </div>  
        </div>

        
</div><!--/.container-->
<br><br>

<!--*************************************************** FOOTERS **********************************************-->
<footer id="footer" class="midnight-blue wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
             Petshop Online Website</a>. All Rights Reserved 
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right wow fadeInDown">
                        <!-- <li class="wow fadeInDown"><a href="index.php"><i class="fa fa-home"></i> Home</a></li> -->
                        
                        <!-- <li class="wow fadeInDown"><a href="contacts.php"><i class="fa fa-phone"></i> Contacts</a></li> -->
                        <li class="wow fadeInDown"><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><i class="fa fa-lock"></i> Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
 <!----loginModal----->
<?php include('loginModal.php');?>      
                     
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['UserName'])) { 

    include('includes/admin.php');

} ?>