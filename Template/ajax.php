<?php

// require MySQL Connection
require ('../database/DBController.php');

// require Product Class
require ('../database/Product.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

if (isset($_POST['serviceid'])){
    $result = $product->getProduct($_POST['serviceid']);
    echo json_encode($result);
}