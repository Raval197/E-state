<?php
require("config.php");
if(!isset($_SESSION['bemail']))
{
	header("location:login.php");
}
?>  
  <div class="header" style="background-color: #01A2E2;">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="dashboard.php" class="logo">
						<img src="assets/img/finallogo.png" alt="Logo">
					</a>
					<a href="dashboard.php" class="logo logo-small">
						<img src="assets/img/finallogo2.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				

				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					<li class="nav-item dropdown app-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.png" width="31" alt="Ryan Taylor"></span>
						</a>
						
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/profiles/avatar-01.png" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6><?php echo $_SESSION['bemail'];?></h6>
									<p class="text-muted mb-0">Builder</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.php">Profile</a>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>

					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			
			<!-- header --->
			
			
			
						<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li> 
								<a href="dashboard.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							
							<!-- <li class="menu-title"> 
								<span>Authentication</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="index.php"> Login </a></li>
									<li><a href="register.php"> Register </a></li>
									
								</ul>
							</li> -->
							<li class="menu-title"> 
								<span>Property Management</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-map"></i> <span> Property</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="propertyadd.php"> Add Property</a></li>
									<li><a href="propertyview.php"> View Property </a></li>
								</ul>
							</li>
							
							
							
							<li class="menu-title"> 
								<span>Query</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-quote-left"></i> <span> Message </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="contactview.php"> Message </a></li>
									<!-- <li><a href="feedbackview.php"> Feedback </a></li> -->
								</ul>
							</li>
							
							<li class="menu-title"> 
								<span>appointment</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-comment"></i> <span>Appointment</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="appointment.php">pending Appointment </a></li>
									<li><a href="viewappoinment.php">view Appointment </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>payment</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-money"></i> <span>Payment</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="payment.php">payment </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>setting</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-users"></i> <span> Profile</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="profile.php"> Profile </a></li>
									<li><a href="changepass.php"> Change Password </a></li>
								</ul>
							</li>
							
							
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
