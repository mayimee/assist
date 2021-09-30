<?php

    session_start();
    error_reporting(0);

    include('includes/dbconnection.php');

    if (strlen($_SESSION['odmsaid']==0)) {
        header('location:logout2.php');
    } 
    else{
        if(isset($_POST['submit']))
    {


            $sername=$_POST['sername'];
            $serdes=$_POST['serdes'];
            $serprice=$_POST['serprice'];

            $sql="insert into tblservice(ServiceName,SerDes,ServicePrice)values(:sername,:serdes,:serprice)";
            $query=$dbh->prepare($sql);
            $query->bindParam(':sername',$sername,PDO::PARAM_STR);
            $query->bindParam(':serdes',$serdes,PDO::PARAM_STR);
            $query->bindParam(':serprice',$serprice,PDO::PARAM_STR);

            $query->execute();

            $LastInsertId=$dbh->lastInsertId();
            if ($LastInsertId>0) {
                echo '<script>alert("Services has been added.")</script>';
            echo "<script>window.location.href ='add-services.php'</script>";
        }
        else
        {
            echo '<script>alert("Something Went Wrong. Please try again")</script>';
        }

    
    }

?>

<!doctype html>

<html lang="en" class="no-focus"> <!--<![endif]-->

<head>
<title>Assist - Add Services</title>
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
            <div class="content">
                    
                <!-- Register Forms -->
                <h2 class="content-heading">Add Service</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Bootstrap Register -->
                                    
                            <form method="post">
                                            
                                <div class="form-group row">

                                    <label class="col-12" for="register1-email">Service Name:</label>
                                    
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="sername" value="" required='true'>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-email">Service Description:</label>
                                    
                                    <div class="col-12">
                                        <textarea type="text" class="form-control" name="serdes" value="" required='true'></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12" for="register1-password">Service Price:</label>

                                    <div class="col-12">
                                        <input type="text" class="form-control" name="serprice" value="" required='true'>
                                    </div>

                                </div>

                                <div class="form-group row">

                                    <div class="col-12">

                                        <button type="submit" class="btn btn-alt-success" name="submit">
                                            <i class="fa fa-plus mr-5"></i> Add
                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>
                    <!-- END Bootstrap Register -->
            </div>
        </main>
        <!-- END Main Container -->              
    </div>
    <!-- END Page Content -->

            

    <?php include_once('includes/footer.php');?>
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
    
</body>
</html>
<?php }  ?>