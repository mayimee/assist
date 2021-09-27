<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Service.php');

// require Cart Class
require ('database/Cart.php');


// DBController object
$db = new DBController();

// Product object
$service = new Service($db);
$service_shuffle = $service->getData();

// Cart object
$Cart = new Cart($db );
