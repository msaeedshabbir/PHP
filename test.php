<?php
include('connection.php');

if (isset($_GET['con_name'])) {
    $con_name = $_GET['con_name'];
    $query = "SELECT * FROM countrys WHERE country LIKE '%$con_name%'";
    $q = mysqli_query($con, $query);

    if (!$q) {
        echo "Error: " . mysqli_error($con);
    } else {
        echo '<table>';
        while ($r = mysqli_fetch_assoc($q)) {
            echo '<tr><td style="border:1px solid black">' . $r['country'] . '</td></tr>';
        }
        echo '</table>';
    }
}
?>