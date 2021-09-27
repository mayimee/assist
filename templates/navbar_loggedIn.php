<!doctype html>
<html>
<head>
    <title>Assist</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
</head>

<body>

<!--Navigation Bar-->
<nav>
    <div class="innerNav">
        <div class="nav1">
            <img src="./images/Assist2_NavBar.png" class="navbarBrand">
            <div class="searchServiceContainer">
                <form class="searchService" action="action_page.php">
                    <input type="text" placeholder="Search services..." id="searchService">
                    <button type="submit"><span class="fa fa-search"></span></button>
                </form>
            </div>
            <form class="calendar">
                <label for="serviceDate"></label>
                <input type="date" id="serviceDate" min="" onfocus="this.min=new Date().toISOString().split('T')[0]">
            </form>
            <div class="searchAddressContainer">
                <form class="searchAddress" action="action_page.php">
                    <input type="text" placeholder="Enter city address..." name="search">
                    <button type="submit"><span class="fa fa-search"></span></button>
                </form>
            </div>
        </div>
        <div class="nav2">
            <div class="cartIconContainer">
                <form action="#" class="font-size-14 font-rale">
                    <a href="cart.php" class="py-2 rounded-pill color-primary-bg">0
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light"></span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</nav>

</body>
</html>