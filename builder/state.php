<?php
require("config.php");
$state_id =   $_POST['state_data'];

$state = "SELECT * FROM `city` WHERE sid='$state_id' ";

$state_qry = mysqli_query($con, $state);
// $output="";
$output = '<option value="">Select State</option>';
while ($state_row = mysqli_fetch_assoc($state_qry)) {
    $output .= '<option value="' . $state_row['cname'] . '">' . $state_row['cname'] . '</option>';
}
echo $output;
?>