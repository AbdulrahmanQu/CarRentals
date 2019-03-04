<?php
session_start();
include_once('includes/config.php');

if(isset($_POST['login']))
{
    $Email=$_POST['email'];
    $Password=md5($_POST['password']);
    $sql ="SELECT Email,Password FROM companies WHERE Email=:email and Password=:password";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':email', $Email, PDO::PARAM_STR);
    $query-> bindParam(':password', $Password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
        $_SESSION['login']=$_POST['email'];
        echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";

    } else{

        echo "<script>alert('Invalid Details');</script>";

    }

}

?>

<html>
<head>
    <title>Car Rental | Login</title>
    <link rel="stylesheet" href="../companies/includes/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->

<!-- Banners -->
<section id="banner" class="banner-section2">
                <div style="position: relative; bottom: 220px;" class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Login</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="login_wrap">
                                <div class="col-md-12 col-sm-6">
                                    <form method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email address*">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password*">
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" name="login" value="Login" class="btn btn-block">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <p>Don't have an account? <a href="register.php" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
                        <p><a href="forgotpassword.php" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
                    </div>
                </div>
            </div>
</section>
<!-- /Banners -->

</body>
</html>