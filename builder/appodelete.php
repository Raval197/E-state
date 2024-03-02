<?php
include("config.php");
$aid = $_GET['id'];
$sql = "DELETE FROM req WHERE did = {$aid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Property Deleted</p>";
	header("Location:propertyview.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Property Not Deleted</p>";
	header("Location:propertyview.php?msg=$msg");
}
mysqli_close($con);
?>