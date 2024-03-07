<?php
require("config.php");
////code
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();

if (!isset($_SESSION['bemail'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>E-state - Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feathericon.min.css">

    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    .formdiv{
        width: 90%;
        margin: 0 auto;
    }
</style>
    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>

    <!-- Main Wrapper -->


    <!-- Header -->
    <?php include("header.php"); ?>
    <!-- /Header -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header py-5">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome Builder!</h3>
                        <p></p>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Change Password</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="full-row">
            <div class="container">
                    
                    <?php
                    if(isset($_POST['update'])){

                            $uid=$_SESSION['bid'];  
                            $sql = "SELECT upass FROM user WHERE uid = '$uid'";
                            $result = $con->query($sql);

                            if ($result && $result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $hashedOldPassword = $row['upass'];
                                $oldPassword=$_POST['pass'];
                                $newPassword=$_POST['new_pass'];
                                $confirmPassword=$_POST['con_pass'];
                        
                                // Verify the old password
                                if (sha1($oldPassword) == $hashedOldPassword) {
                                    // Hash the new password using SHA-1 (for educational purposes only, not recommended for security)
                                    $hashedNewPassword = sha1($newPassword);
                        
                                    // Update the user's password in the database
                                    $updateSql = "UPDATE user SET upass = '$hashedNewPassword' WHERE uid = '$uid'";
                                    $updateResult = $con->query($updateSql);

                                    if ($newPassword !== $confirmPassword) {
                                        echo"<script>alert('New password and confirm password do not match.'); window.location='changepass.php'</script>";
                                        return;
                                    }
                        
                                    // / Check if the password was updated successfully
                                    if ($updateResult === TRUE) {
                                        echo"<script>alert('update successfully'); window.location='changepass.php'</script>";
                                    } else {
                                        echo"<script>alert('Failed to change password. Please try again. Error: '); window.location='changepass.php'</script>";
                                    }
                                } else {
                                
                                    echo"<script>alert('Old password is incorrect. Please try again.'); window.location='changepass.php'</script>";
                                }
                            } else {
                                
                                echo"<script>alert('User not found or database error'); window.location='changepass.php'</script>";
                                
                            }
                    }

                    ?>


                <div class=" d-flex justify-content-center">
                    <form action="#" method="post" class="formdiv">
                        <h4 class="text-secondary border-bottom-on-white pb-3 mb-4">Change Password</h4>
						
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="about-me">Current password</label>
                                    <input type="Password" name="pass"  class="form-control" placeholder="enter current password" maxlength="20">
                                </div>
                                <div class="form-group">
                                    <label for="about-me">New Password</label>
                                    <input type="Password" name="new_pass"  class="form-control" placeholder="enter new password" maxlength="10">
                                </div>
                                <div class="form-group">
                                    <label for="about-me">Confirm Password</label>
                                    <input type="Password" name="con_pass"  class="form-control" placeholder="enter confirm password" maxlength="10">
                                </div>
                                <input type="submit" class="btn btn-info mb-4" name="update" value="Change Password">
                            </div>
							</form>
                        </div>
                    
                </div>            
            </div>
        </div>

    <!-- /Page Wrapper -->


    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/js/chart.morris.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

</html>