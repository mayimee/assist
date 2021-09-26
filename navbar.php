<!doctype html>
<html>
<head>
    <title>Assist</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//css/styles_Gi.css">

    <!-- Search icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<!--Navigation Bar-->
<nav>
    <div class="innerNav">
        <a href="index.php"><img src="./images/Assist2_NavBar.png" class="navbarBrand"></a>
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
        <a href="customerlogin.php" class="loginButton">Login / Signup</a>
        <a href="servprovlogin.php" class="navServiceProviderLink">Be a  Service Provider</a>
    </div>
</nav>

</body>
</html>