<?php
    ob_start();
    // include header.php file
    include ('header_logout.php');
?>
<div class="pageSpacer" style="height: 8vh; width: 100%"></div>
<?php

    /*  include cart services if it is not empty */
        count($product->getData('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');
    /*  include cart services if it is not empty */


    /*  include top sale section */
        include ('Template/_new-phones.php');
    /*  include top sale section */

?>

<?php
    // include footer.php file
    include ('footer.php');
?>


