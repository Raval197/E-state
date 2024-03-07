<?php
// session_start();
require("config.php");

$id=$_GET['id'];
$status=$_GET['status'];
$uquery="UPDATE req SET status=$status WHERE did=$id";
$result=mysqli_query($con,$uquery);
if($result){
    header("location:appointment.php");
}
?>