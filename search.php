
<?php
// Assume you have a database connection established already
include("config.php");


if (isset($_POST['query'])) {
    $search = $_POST['query'];

    // Perform a query to fetch data based on the search term
    // Replace this with your own database query
    $sql = "SELECT * FROM city WHERE cname LIKE '%$search%'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p>' . $row['cname'] . '</p>';
            // Add other data you want to display
        }
    } else {
        echo 'No results found';
    }
}
?>
