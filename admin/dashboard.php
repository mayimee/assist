<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
 <head>
 <title>Assist - Admin Dashboard</title>
 <link rel="icon" href="assets/images/Icon_Search.png" type="image/x-icon">
 <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
    </head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
         
         <?php include_once('includes/sidebar.php');?>

          <?php include_once('includes/header.php');?>
          

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="container">
                    <div class="row">
                        <!-- Row #1 -->
                        
                        <div class="col">
                            <a class="block text-center" href="new-booking.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                                    <?php 
                                        $sql ="SELECT ID from tblbooking where Status is null ";
                                        $query = $dbh -> prepare($sql);
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                        $totalnewbooking=$query->rowCount();
                                    ?>
                                    <div class="ribbon-box"><?php echo htmlentities($totalnewbooking);?></div>
                                    <p class="mt-5">
                                        <i class="si si-pencil fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Total New Booking</p>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a class="block text-center" href="approved-booking.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                                   <?php 
                                        $sql ="SELECT ID from tblbooking where Status='Approved' ";
                                        $query = $dbh -> prepare($sql);
                                        $query->execute();
                                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                                        $totalappbooking=$query->rowCount();
                                    ?> 
                                    <div class="ribbon-box"><?php echo htmlentities($totalappbooking);?></div>
                                    <p class="mt-5">
                                        <i class="si si-target fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Total Approved Booking</p>
                                </div>
                            </a>
                        </div>
                    
                        <!-- END Row #1 -->
                    </div>
                  
                  
                </div>
                <div class="container">
                    <div class="row">
                        <!-- Row #2 -->
                        <div class="col">
                            <a class="block text-center" href="cancelled-booking.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                                    <?php 
$sql ="SELECT ID from tblbooking where Status='Cancelled' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalcanbooking=$query->rowCount();
?>
                                    <div class="ribbon-box"><?php echo htmlentities($totalcanbooking);?></div>
                                    <p class="mt-5">
                                        <i class="si si-support fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Total Cancelled Booking</p>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a class="block text-center" href="manage-services.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                                     <?php 
$sql ="SELECT ID from tblservice";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalserv=$query->rowCount();
?>
                                    <div class="ribbon-box"><?php echo htmlentities($totalserv);?></div>
                                    <p class="mt-5">
                                        <i class="si si-wallet fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Total Services</p>
                                </div>
                            </a>
                        </div>
                        
                    
                        <!-- END Row #2 -->
                    </div>
                  
                  
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

             <?php include_once('includes/footer.php');?>
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_dashboard.js"></script>
    </body>
</html>