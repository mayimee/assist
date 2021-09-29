<?php
    ob_start();
    // include header.php file
    include('header_logout.php');
?>

<?php
    
    /*  include banner area  */
        include ('Template/_banner-area.php');
    /*  include banner area  */

    /*  include top sale section */
        include ('Template/_top-sale2.php');
    /*  include top sale section */

    /*  include special price section  */
         include ('Template/_special-price2.php');
    /*  include special price section  */

    /*  include banner ads  */
        include ('Template/_banner-ads.php');
    /*  include banner ads  */

    /*  include new phones section  */
        include ('Template/_new-phones2.php');
    /*  include new phones section  */
?>

<?php
// include footer.php file
include ('footer.php');
?>