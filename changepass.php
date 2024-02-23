<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}
								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<!--	Title
	=========================================================-->
<title>Real Estate PHP</title>
<style>
    .formdiv{
        width: 90%;
        margin: 0 auto;
    }
</style>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Profile</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item text-white">Profile</li>
                                <li class="breadcrumb-item active">Change Password</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Profile</h2>
                        </div>
					</div>
                    <?php 
                    if(isset($_POST['update'])){
                                    $uid=$_SESSION['uid'];            
                                    $cpass=$_POST['pass'];
                                    $new_pass=$_POST['new_pass'];
                                    $conpass=$_POST['con_pass'];
                                    $chn_pass=mysqli_query($con,"SELECT * FROM user WHERE uid = '{$uid}'");
                                    $chn_pass1=mysqli_fetch_array($chn_pass);
                                    $data_pwd=$chn_pass1['upass'];
                                    if($data_pwd == $cpass){
                                        if($new_pass == $conpass){
                                            $update=mysqli_query($con,"UPDATE user SET upass=$new_pass WHERE uid= '{$uid}'");
                                            echo"<script>alert('update successfully'); window.location='changepass.php'</script>";
                                        }
                                        else{
                                            echo"<script>alert('confirm password not match'); window.location='changepass.php'</script>";
                                        }
                                    }
                                    else{
                                        
                                        echo"<script>alert('old password is wrong'); window.location='changepass.php'</script>";
                                    }
                                }
                                  
								?>
                <div class="bg-white d-flex justify-content-center">
                    <form action="#" method="post" class="formdiv">
                        <h4 class="text-secondary border-bottom-on-white pb-3 mb-4">Change Password</h4>
						
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="about-me">Current assword</label>
                                    <input type="password" name="pass"  class="form-control" placeholder="enter current password" maxlength="20">
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
	<!--	Submit property   -->
   
        
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>

<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>