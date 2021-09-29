<?php


    $conn = mysqli_connect("localhost", "root", "M@rielle9891", "assist");
    $set  = $_POST['search'];

    if ($set) {
        $show = "SELECT * FROM service where service_name = '$set'";
    $result = mysqli_query($conn, $show);

    while($rows = mysqli_fetch_array($result)) {
        echo $rows['service_name'];
    }
    } else {
        echo "0 results";
    }


?>