
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="realestatephp";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

session_start();
 date_default_timezone_set("Asia/Calcutta");

$paymentid=$_POST['payment_id'];
$productid=$_POST['product_id'];
$id=$_SESSION['uid'];
$dt=date('Y-m-d h:i:s');

$sql="insert into payment (`product_id`, `payment_id`, `aded_date`,`uid`) values ('".$productid."','".$paymentid."','".$dt."','".$id."')";

$result=mysqli_query($conn,$sql);

if($result)
{
	$query="UPDATE property SET status='1' WHERE pid=$productid";
	$query_run=mysqli_query($conn,$query);
if($query_run){
	echo" update successfully";
}
	echo 'done';
	$_SESSION['paymentid']=$paymentid;
}
else 
{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>