<?php 

include("config.php");

if(isset($_REQUEST['resetlink']))
{
	$email=$_POST['email'];
	$abc="SELECT * FROM `user` WHERE `uemail`='$email'";
	$bcd=mysqli_query($con,$abc);
	if($bcd){
		if(mysqli_num_rows($bcd)==1){
			$reset_token=bin2hex(random_bytes(16));
			date_default_timezone_set('Asia/Kolkata');
			$date = date('Y-m-d'); // adding
			
			$update_query = "UPDATE `user` SET  `resettoken` = '$reset_token', `resetexpiry` = '$date' WHERE `uemail` = '$email'";
			if($update_result = mysqli_query($con, $update_query)){

			}
			else{
				echo"<script>alert('cannot run  not query.'); window.location='changepass.php'</script>";

			}
		}		
	}
	else{
 echo"<script>alert('cannot run query.'); window.location='changepass.php'</script>";
                                       
	}
}

?>