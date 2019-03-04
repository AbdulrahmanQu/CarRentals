<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
{
    $name=$_POST['fullname'];
    $email=$_POST['email'];
    $contactno=$_POST['contactno'];
    $message=$_POST['message'];
    $sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
    $query->bindParam(':message',$message,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
        $msg="Query Sent. We will contact you shortly";
    }
    else
    {
        $error="Something went wrong. Please try again";
    }

}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Car Rental | Services</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!--Custome Style -->
    
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <!--slick-slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!--bootstrap-slider -->
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

     


    <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
        .succWrap{
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
    </style>
</head>
<body>

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->



<

            <!-- Start feature Area -->
            <section class="feature-area section-gap" id="service">
                <div class="container">
                    <div class="row d-flex justify-content-center"><
                           <center> <h1>What Services we offer to our clients</h1></center>
                            
                       
                    </div><br>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-feature">
                                <h4><span class="lnr lnr-user"></span>Free Cancellation</h4>
                                <p>
                                    FREE cancellation before the reserved pick-up time for most cars 
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-feature">
                                <h4><span class="lnr lnr-license"></span>No Credit Card Fees </h4>
                                <p>
                                    Get best deals from us and we've got you covered for the credit card fees .
                                </p>                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-feature">
                                <h4><span class="lnr lnr-phone"></span>24-Hour Emergency Roadside Assistance</h4>
                                <p>
                                    
                                 This service is free and is unmatched by any other local car rental company.  
                                                               
                                </p>                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-feature">
                                <h4><span class="lnr lnr-rocket"></span>Go Anywhere </h4>
                                <p>
                                    Our cars have permits all of The kingdom. And help on the road clock .
                                </p>                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-feature">
                                <h4><span class="lnr lnr-diamond"></span>Search & Easily Compare</h4>
                                <p>
                                    Compare all information easily at one search and book a car in 60 seconds .
                                </p>                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-feature">
                                <h4><span class="lnr lnr-bubble"></span>Lowest Price Guaranteed </h4>
                                <p>
                                    Find a lower price, we'll match it and refund you 100% of the difference .
                                </p>                                    
                            </div>
                        </div>                      
                    </div>
                </div>  
            </section>
            <!-- End feature Area -->       



<<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top-->

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form -->

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form -->

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form -->

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS-->
<script src="assets/js/bootstrap-slider.min.js"></script>
<!--Slider-JS-->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:55 GMT -->
</html>
