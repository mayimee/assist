<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/header.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>

<!-- start #header -->
<header id="header" style="position: fixed; top: 0; width: 100%; z-index: 10">
    <div class="strip d-flex justify-content-end px-4 py-1" style="background: #fb6f17">       
        <div class="font-rale font-size-14">
            <a href="customerlogin.php" class="px-3 border-right border-left text-dark">Login</a>
            <a href="admin/login2.php" class="px-3 text-dark">Be a Service Provider</a>
        </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #58595b">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <img src="./assets/images/Assist2_NavBar.png" class="navBrand">
                </li>
                <li class="nav-item active">
                    <div class="searchServiceContainer">
                        <form class="searchService" action="action_page.php">
                            <input type="text" placeholder="Search services..." id="searchService">
                            <button type="submit"><span class="fa fa-search"></span></button>
                        </form>
                    </div> 
                </li>
                <li class="nav-item">
                    <div class="calendarContainer">
                        <form class="calendar">
                            <label for="serviceDate"></label>
                            <input type="date" id="serviceDate" min="" onfocus="this.min=new Date().toISOString().split('T')[0]">
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="searchAddressContainer">
                        <form class="searchAddress" action="action_page.php">
                            <input type="text" placeholder="Enter city address..." name="search">
                            <button type="submit"><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="findButtonContainer">
                        <a href="#" class="findButton">Find</a>
                    </div>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
            
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">