<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
    <title>Document</title>
</head>
<body>

<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
    <div class="top-header bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="top-contact list-text-white  d-table">
                        <li><a href="#"><i class="fas fa-phone-alt "style="color: #01A2E2;"></i>+91 8128914882</a></li>
                        <li><a href="#"><i class="fas fa-envelope "style="color: #01A2E2;"></i>estate@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="top-contact float-right">
                        <ul class="list-text-white d-table">
                            <li><i class="fas fa-user"style="color: #01A2E2;"></i>
                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <a href="logout.php">Logout</a>&nbsp;&nbsp;<?php }
                                     else { ?>
                                    <a href="login.php">Login</a>&nbsp;&nbsp;

                                    |
                            </li>
                            <li><i class="fas fa-user-plus " style="color: #01A2E2;"></i><a href="register.php"> Register</li><?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav  hover-success-nav py-2" style="background-color: #01A2E2;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg  p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="./images/logo/finallogo.png" style="height: 50px;width: 130px;" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown"> <a class="nav-link" style="color: white;" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>

                                <li class="nav-item"> <a class="nav-link" style="color: white;" href="about.php">About</a> </li>

                                <li class="nav-item"> <a class="nav-link" style="color: white;" href="property.php">Properties</a> </li>
                                <li class="nav-item"> <a class="nav-link" style="color: white;" href="contact.php">Contact</a> </li>





                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" style="color: white;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                        <ul class="dropdown-menu" style="background-color: #01A2E2;">
                                            <li class="nav-item"> <a class="nav-link" style="color: white;" href="payment-history.php">Payments</a> </li>
                                            <li class="nav-item"> <a class="nav-link" style="color: white;" href="profile.php">Profile</a> </li>
                                            <li class="nav-item"> <a class="nav-link" style="color: white;" href="feedback.php">Feedback</a> </li>
                                            <li class="nav-item"> <a class="nav-link" style="color: white;" href="feature.php">Notification</a> </li>
                                           
                                        </ul>
                                        
                                    </li>					
				</ul>
                <?php
                $uid=$_SESSION['uid'];
									$query=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$uid'");
									while($row=mysqli_fetch_array($query))
									{
								?>
                    <?php
                                    }
                    ?>
					<!-- /User Menu -->
				
                                <?php } else { ?>
                                    <li class="nav-item"> <a class="nav-link" style="color: white;" href="login.php">Login/Register</a> </li>
                                <?php } ?>

                            </ul>


                            <!-- <a class="btn btn-success d-none d-xl-block" style="border-radius:30px;" href="submitproperty.php">Submit Peoperty</a>  -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
    
</body>
</html>