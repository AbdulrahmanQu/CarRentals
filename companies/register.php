<?php
//error_reporting(0);
if(isset($_POST['signup']))
{
    $Company=$_POST['Company'];
    $Email=$_POST['Email'];
    $ContactNo=$_POST['ContactNo'];
    $City=$_POST['City'];
    $Password=md5($_POST['Password']);
    $sql="INSERT INTO  companies (Company,Email,ContactNo, City,Password) VALUES(:Company,:Email,:ContactNo,:City ,:Password)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':Company',$Company,PDO::PARAM_STR);
    $query->bindParam(':Email',$Email,PDO::PARAM_STR);
    $query->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
    $query->bindParam(':City',$City,PDO::PARAM_STR);
    $query->bindParam(':Password',$Password,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
        echo "<script>alert('Registration successfull. Now you can login');</script>";
    }
    else
    {
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }
}

?>

<html>
<head>
    <title>Car Rental | Register</title>
    <link rel="stylesheet" href="includes/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>


<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->


<!-- Banners -->
<section " id="banner" class="banner-section2">
<div style="position: relative; bottom: 220px;" class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Sign Up</h3>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="signup_wrap">
                    <div class="col-md-12 col-sm-6">
                        <form  method="post" name="signup" onSubmit="return valid();">
                            <div class="form-group">
                                <input type="text" class="form-control" name="Company" placeholder="Full Name" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="ContactNo" placeholder="ContactNo" maxlength="10" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="City" placeholder="City" maxlength="10" required="required">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="Email" id="Email" onBlur="checkAvailability()" placeholder="Email Address" required="required">
                                <span id="user-availability-status" style="font-size:12px;"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="Password" placeholder="Password" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="required">
                            </div>
                            <div class="form-group checkbox">
                                <input style="position: relative; left: 25px"  type="checkbox" id="terms_agree" required="required" checked="">
                                <label  style="position: relative; left: 10px" for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Sign Up" name="signup" id="submit" class="btn btn-block">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal-footer text-center">
            <p>Already got an account? <a href="index.php" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
        </div>
    </div>
</div>
        </div></div>
</section>
</body>
</html>