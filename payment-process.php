
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
$dt=date('Y-m-d h:i:s');

$sql="insert into payment (`product_id`, `payment_id`, `aded_date`) values ('".$productid."','".$paymentid."','".$dt."')";

$result=mysqli_query($conn,$sql);

if($result)
{
	echo 'done';
	$_SESSION['paymentid']=$paymentid;
}
else 
{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>