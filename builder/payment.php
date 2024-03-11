<?php
session_start();
require("config.php");
////code

if (!isset($_SESSION['bemail'])) {
	header("location:login.php");
}
if(isset($_POST['update']))
{
$sql=mysqli_query($con,"update req set status='$status'");

echo "<script>alert('Form Details Updated Successfully');</script>";

  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>E-state | Builder</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feathericon.min.css">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>

	<!-- Main Wrapper -->


	<!-- Header -->
	<?php include("header.php"); ?>
	<!-- /Sidebar -->

	<!-- Page Wrapper -->
	<div class="page-wrapper">
		<div class="content container-fluid">

			<!-- Page Header -->
			<div class="page-header py-5">
				<div class="row">
					<div class="col">
						<h3 class="page-title">Appointment</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
							<li class="breadcrumb-item active">Appointment</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->

			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Appointment List</h4>
							<?php
							if (isset($_GET['msg']))
								echo $_GET['msg'];

							?>
						</div>
						<div class="card-body">
<form action="" method="post">
							<table id="basic-datatable" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Property Name</th>
                                        <th>image</th>
										<th>Date/Time</th>
										<th>Amount</th>
										<th>Payment_id</th>
										<!-- <th>Action</th> -->
									</tr>
								</thead>


								<tbody>
									<?php
                                    $id=$_SESSION['bid'];
								    $query = mysqli_query($con, "SELECT property.*, payment.* FROM `property`,`payment` WHERE property.pid=payment.product_id AND property.uid=$id");
                                    $cnt = 1;
                                    while ($row = mysqli_fetch_array($query)) {
                                        $amount = $row['price'];
                                        $deposit = $amount * 3;
                                        $maintanance = 500;
                                        $totle = $amount + $deposit + $maintanance;
									?>
										 <tr>
                                             <td><?php echo $row['title']; ?></td>
                                             <td><img src="./property/<?php echo $row['18'];?>" height="100px" width="100px" alt="pimage"></td>
                                    <td><?php echo $row['aded_date']; ?></td>
                                    <td><?php echo $totle ?></td>
                                    <td><?php echo $row['payment_id']; ?></td>                                    
                                </tr>
									<?php
										$cnt = $cnt + 1;
									}
									?>

								</tbody>
							</table>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- /Main Wrapper -->


	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Datatables JS -->status
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
	<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

	<script src="assets/plugins/datatables/dataTables.select.min.js"></script>

	<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
	<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
	<script src="assets/plugins/datatables/buttons.flash.min.js"></script>
	<script src="assets/plugins/datatables/buttons.print.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>