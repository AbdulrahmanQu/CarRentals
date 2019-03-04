<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{
header('location:index.php');
}
else{
	?>

<!doctype html>
<html lang="en" class="no-js">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="theme-color" content="#3e454c">

        <title>Car Rental | Home</title>

        <!-- Font awesome -->
        <link rel="stylesheet" href="../admin/css/font-awesome.min.css">
        <!-- Sandstone Bootstrap CSS -->
        <link rel="stylesheet" href="../admin/css/bootstrap.min.css">
        <!-- Bootstrap Datatables -->
        <link rel="stylesheet" href="../admin/css/dataTables.bootstrap.min.css">
        <!-- Bootstrap social button library -->
        <link rel="stylesheet" href="../admin/css/bootstrap-social.css">
        <!-- Bootstrap select -->
        <link rel="stylesheet" href="../admin/css/bootstrap-select.css">
        <!-- Bootstrap file input -->
        <link rel="stylesheet" href="../admin/css/fileinput.min.css">
        <!-- Awesome Bootstrap checkbox -->
        <link rel="stylesheet" href="../admin/css/awesome-bootstrap-checkbox.css">
        <!-- Admin Stye -->
        <link rel="stylesheet" href="../admin/css/style.css">
    </head>


<body background="#f4f";>


<?php include('includes/headerD.php');?>


	<div class="ts-main-content">
<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Home</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-dark text-grey">
												<div class="stat-panel text-center">
												<?php 
$sql1 ="SELECT id from tblvehicles ";
$query1 = $dbh -> prepare($sql1);;
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalvehicle=$query1->rowCount();
?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($totalvehicle);?></div>
													<div class="stat-panel-title text-uppercase">Listed Vehicles</div>
												</div>
											</div>
											<a href="manage-vehicles.php" class="block-anchor panel-footer text-center text-bold">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
                                            <div class="panel-body bk-dark text-grey">
												<div class="stat-panel text-center">
<?php 
$sql2 ="SELECT id from tblbooking ";
$query2= $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$bookings=$query2->rowCount();
?>

													<div class="stat-panel-number h1 "><?php echo htmlentities($bookings);?></div>
													<div class="stat-panel-title text-uppercase">Total Bookings</div>
												</div>
											</div>
											<a href="manage-bookings.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>1
    </div>

<!-- Loading Scripts -->
<script src="../admin/js/jquery.min.js"></script>
<script src="../admin/js/bootstrap-select.min.js"></script>
<script src="../admin/js/bootstrap.min.js"></script>
<script src="../admin/js/jquery.dataTables.min.js"></script>
<script src="../admin/js/dataTables.bootstrap.min.js"></script>
<script src="../admin/js/Chart.min.js"></script>
<script src="../admin/js/fileinput.js"></script>
<script src="../admin/js/chartData.js"></script>
<script src="../admin/js/main.js"></script>

<script>

    window.onload = function(){

        // Line chart from swirlData for dashReport
        var ctx = document.getElementById("dashReport").getContext("2d");
        window.myLine = new Chart(ctx).Line(swirlData, {
            responsive: true,
            scaleShowVerticalLines: false,
            scaleBeginAtZero : true,
            multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
        });

        // Pie Chart from doughutData
        var doctx = document.getElementById("chart-area3").getContext("2d");
        window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

        // Dougnut Chart from doughnutData
        var doctx = document.getElementById("chart-area4").getContext("2d");
        window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

    }
</script>
</body>
    </html>
<?php } ?>