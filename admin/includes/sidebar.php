<?php
    session_start();
    error_reporting(0);
    
    include('includes/dbconnection.php');
    
    if (strlen($_SESSION['odmsaid']==0)) 
    {
        header('location:logout2.php');
    } 
    else
    {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/colors.css">
</head>

<body>
   <nav id="sidebar">
        <!-- Sidebar Scroll Container -->
        <div id="sidebar-scroll">
                    
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                            
                <!-- Side Header -->
                <div class="content-header content-header-fullrow px-15">
                    
                    <!-- Mini Mode -->
                    <div class="content-header-section sidebar-mini-visible-b txtColorTheme">
                        
                        <!-- Logo -->
                        <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                            <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                        </span>
                        <!-- END Logo -->
                    </div>
                    <!-- END Mini Mode -->

                    <!-- Normal Mode -->
                    <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                    
                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Sidebar -->

                        <!-- Logo -->
                        <div class="content-header-item">
                            <a class="link-effect font-w700" href="dashboard.php">
                                <i class="si si-fire txtColorTheme"></i>
                                <span class="font-size-xl txtColorTheme">ASSIST</span><span class="font-size-xl txtColorTheme"> Admin</span>
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Normal Mode -->
                </div>
                <!-- END Side Header -->

                <!-- Side User -->
                <div class="content-side content-side-full content-side-user px-10 align-parent">
                    
                    <!-- Visible only in mini mode -->
                    <div class="sidebar-mini-visible-b align-v animated fadeIn">
                        <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar1.jpg" alt="">
                    </div>
                    <!-- END Visible only in mini mode -->

                    <!-- Visible only in normal mode -->
                    <div class="sidebar-mini-hidden-b text-center">
                        <a class="img-link" href="#">
                            <img class="img-avatar" src="assets/img/avatars/avatar1.jpg" alt="">
                        </a>
                        <ul class="list-inline mt-10">
                            <?php
                                $aid=$_SESSION['odmsaid'];
                                $sql="SELECT AdminName from  tbladmin where ID=:aid";

                                $query = $dbh -> prepare($sql);
                                $query->bindParam(':aid',$aid,PDO::PARAM_STR);
                                $query->execute();
                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                $cnt=1;
                                if($query->rowCount() > 0)
                                {
                                    foreach($results as $row)
                                    {               
                            ?>
                            
                            <li class="list-inline-item">
                                <a class="link-effect txtColorTheme font-size-xs font-w600 text-uppercase" href="admin-profile.php"><?php  echo $row->AdminName;?></a>
                            </li>
                            <?php $cnt=$cnt+1;}} ?>
                        </ul>
                    </div>
                    <!-- END Visible only in normal mode -->
                </div>
                <!-- END Side User -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="open">
                            <a href="dashboard.php"><i class="si si-cup"></i><span class="sidebar-mini-hide txtColorTheme">Dashboards</span></a>    
                        </li>
                                
                        <li class="nav-main-heading">
                            <span class="sidebar-mini-visible">UI</span>
                            <span class="sidebar-mini-hidden"></span>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu"><i class="si si-puzzle"></i><span class="sidebar-mini-hide"></span>Services</a>
                            
                            <ul>
                                <li>
                                    <a href="add-services.php">Add Service</a>
                                </li>
                                <li>
                                    <a href="manage-services.php">Manage Services</a>
                                </li>
                            </ul>
                        </li>
                                
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Booking</span></a>
                            
                            <ul>
                                <li>
                                    <a href="new-booking.php">New Bookings</a>
                                </li>
                                <li>
                                    <a href="approved-booking.php">Approved Bookings</a>
                                </li>
                                <li>
                                    <a href="cancelled-booking.php">Cancelled Bookings</a>
                                </li>
                                <li>
                                    <a href="all-booking.php">All Bookings</a>
                                </li>
                                        
                            </ul>
                        </li>

                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-trophy"></i><span class="sidebar-mini-hide">Search</span></a>
                                        
                            <ul>
                                <li>
                                    <a href="booking-search.php">Booking Search</a>
                                </li>              
                            </ul>
                        </li>                          
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
        <!-- Sidebar Content -->
        </div>
        <!-- END Sidebar Scroll Container -->
    </nav>
    <?php }  ?>

</body>
</html>