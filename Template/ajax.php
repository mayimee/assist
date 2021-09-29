<?php

// require MySQL Connection
require ('../database/DBController.php');

// require Product Class
require ('../database/Product.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

if (isset($_POST['service_id'])){
    $result = $product->getProduct($_POST['service_id']);
    echo json_encode($result);
}