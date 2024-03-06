<?php
include("config.php");
$did = $_GET['did'];
echo"$did";
$sql = "DELETE FROM req WHERE did='$did'";
$result = mysqli_query($con, $sql);
if($result)
{
	$msg="<p class='alert alert-success'>Property Deleted</p>";
	header("Location:appointment.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Property Not Deleted</p>";
	header("Location:appointment.php?msg=$msg");
}
mysqli_close($con);
?>