<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
    <div class="top-header bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="top-contact list-text-white  d-table">
                        <li><a href="#"><i class="fas fa-phone-alt text-success mr-1"></i>+91 8128914882</a></li>
                        <li><a href="#"><i class="fas fa-envelope text-success mr-1"></i>essen@realestatest.com</a></li>
                    </ul>
                </div>
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
            </div>
            <div class="main-nav secondary-nav hover-success-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
<<<<<<< Updated upstream
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="./images/logo/restatelg1.png" style="height: 60px;width: 60px;" alt=""></a>
=======
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="images/logo/restatelg1.png" alt=""></a>
>>>>>>> Stashed changes
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="about.php">About</a> </li>
										
                                        <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>										
										
                                        <li class="nav-item"> <a class="nav-link" href="property.php">Properties</a> </li>
                                        
                                      
=======
>>>>>>> Stashed changes
                <div class="col-md-4">
                    <div class="top-contact float-right">
                        <ul class="list-text-white d-table">
                            <li><i class="fas fa-user text-success mr-1"></i>
                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <a href="logout.php">Logout</a>&nbsp;&nbsp;<?php }
                                     else { ?>
                                    <a href="login.php">Login</a>&nbsp;&nbsp;
<<<<<<< Updated upstream
=======
>>>>>>> 9cd5781a3702e48b51356cb69570c121d8ce9305
>>>>>>> Stashed changes

                                    |
                            </li>
                            <li><i class="fas fa-user-plus text-success mr-1"></i><a href="register.php"> Register</li><?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav  hover-success-nav py-2" style="background-color: #42f06e;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg  p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="./images/logo/t1.png" style="height: 50px;width: 130px;" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown"> <a class="nav-link" style="color: black;" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>

                                <li class="nav-item"> <a class="nav-link" style="color: black;" href="about.php">About</a> </li>

                                <li class="nav-item"> <a class="nav-link" style="color: black;" href="property.php">Properties</a> </li>
                                <li class="nav-item"> <a class="nav-link" style="color: black;" href="contact.php">Contact</a> </li>





                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" style="color: black;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"> <a class="nav-link" style="color: black;" href="profile.php">Profile</a> </li>
                                            <li class="nav-item"> <a class="nav-link" style="color: black;" href="changepass.php">Change Password</a> </li>
                                            <li class="nav-item"> <a class="nav-link" style="color: black;" href="feedback.php">Feedback</a> </li>
                                            <li class="nav-item"> <a class="nav-link" style="color: black;" href="feature.php">Notification</a> </li>
                                        </ul>
                                    </li>
                                <?php } else { ?>
                                    <li class="nav-item"> <a class="nav-link" style="color: black;" href="login.php">Login/Register</a> </li>
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