<?php
include("config.php");
session_start();
date_default_timezone_set('Asia/Kolkata');
$paymentid=$_POST['payment_id'];
$productid=$_POST['product_id'];
$dt=date('y-m-d');
echo"$dt";
$sql="INSERT INTO payment (`product_id`, `payment_id`, `aded_date`) VALUES ('".$productid."','".$paymentid."','".$dt."')";
$result=mysqli_query($con,$sql);
if($result){
    echo"success";
}
else{
    echo"error";
}
?>