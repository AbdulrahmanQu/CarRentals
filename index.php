<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental | Home</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />

 <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<body>

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div style="position: relative; right: 750px" class="banner_content">
            <h1 style="color: #0f253c">Find the right car for you.</h1>
            <p style="color: #0f253c">We have more cars for you to choose. </p>
            <a href="car-listing.php" class="btn">Book Now <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 



            <!-- Start feature Area -->
            <section  style="" class="feature-area section-gap" id="service">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                      <div  class="banner_content">
    
                           <center> <h1 style="color: black">What Services we offer to our clients</h1></center>
                            
                       
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
                                <h4 ><span class="lnr lnr-phone"></span>24-Hour Emergency Roadside Assistance</h4>
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



<!-- Resent Cat -->
<section class="section-padding gray-bg">
    <div class="container"></div>
    <div class="section-header text-center"> <
        <h2>Find the Best <span></span></h2>
        <!--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> -->
    </div>
    <div class="row">

        <!-- Nav tabs -->
        <div class="recent-tab">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Car</a></li>
            </ul>
        </div>
        <!-- Recently Listed New Cars -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="resentnewcar">

                <?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
                $query = $dbh -> prepare($sql);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0)
                {
                    foreach($results as $result)
                    {
                        ?>
                <div class="container">
                    <div class="col-lg-4">
                            <div class="recent-car-list">
                                <div class="car-info-box"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><img src="companies/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image"></a>
                                    <ul>
                                        <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> Model</li>
                                        <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> seats</li>
                                    </ul>
                                </div>
                                <div class="car-title-m">
                                    <h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></a></h6>
                                    <span class="price"> SAR <?php echo htmlentities($result->PricePerDay);?> /Day</span>
                                </div>
                                <div class="inventory_info_m">
                                    <p><?php echo substr($result->VehiclesOverview,100);?></p>
                                </div>
                            </div>
                        </div>
                    <?php }}?>

            </div>
        </div>
    </div>
</section>
<!-- /Resent Cat -->









<!--Footer -->
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
</html>