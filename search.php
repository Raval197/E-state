
<?php
include("config.php");


if (isset($_POST['query'])) {
    $search = $_POST['query'];
    $sql = "SELECT * FROM city WHERE cname LIKE '%$search%'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p>' . $row['cname'] . '</p>';
        }
    } else {
        echo 'No results found';
    }
}
?>
