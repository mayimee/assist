<?php

    require('server.php');

    if (isset($_POST['submitbusiness']))
        {
            $business_name = $_POST['business_name'];
            $type_business = $_POST['type_business'];
            $contact_number = $_POST['contact_number'];
            $address = $_POST['address'];
            $rep_first_name = $_POST['rep_first_name'];
            $rep_last_name = $_POST['rep_last_name'];
            $email_address = $_POST['email_address'];
            $password = $_POST['password'];
            $business_logo = $_FILES['business_logo']['name'];
            $temp_business_logo =$_FILES['business_logo']['tmp_name'];
            $folder = "image/" . $business_logo;

            $hash_password = password_hash($password, PASSWORD_DEFAULT);

            move_uploaded_file($temp_business_logo, "dbdump/ServProv-" . $business_logo);

            $queryInsertBusiness = "INSERT INTO service_provider (business_name, type_business, contact_number, office_address, rep_first_name, rep_last_name, email_address, password, business_image) VALUES ('$business_name', '$type_business', '$contact_number', '$address', '$rep_first_name', '$rep_last_name', '$email_address', '$hash_password', '$business_logo');";

            $sqlInsertBusiness = mysqli_query($connect, $queryInsertBusiness) OR trigger_error('Query failed: ' . $queryInsertBusiness);

            echo "<script> window.location.href = 'servprovlogin.php' ;</script>";
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">  

    <?php require('./css.php'); ?>
</head>
<body>

<?php require('header.php'); ?>

    <main class="mt-5">
        <div class="container mt-5">
            <form action="servprovreg.php" method="POST" enctype="multipart/form-data" class="form-control">
                <div>
                    <h3 class="text-center">Business Registration</h3>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="business_name" class="form-label">Business Name</label>
                        <input type="text" name="business_name" id="business_name" placeholder="Business Name" class="form-control">
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="type_business" class="form-label">Type of Business</label>
                        <select name="type_business" class="form-control">
                            <option value="" hidden>Choose One</option>
                            <option value="Sole Proprietorship">Sole Proprietorship</option>
                            <option value="Partnership">Partnership</option>
                            <option value="Corporation">Corporation</option>
                        </select>
                    </div>
                    <div class="col-md-7 mb-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="number" name="contact_number" id="contact_number" placeholder="Contact Number" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" placeholder="Address" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="rep_first_name" class="form-label">Representative First Name</label>
                        <input type="text" name="rep_first_name" id="rep_first_name" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="rep_last_name" class="form-label">Representative Last Name</label>
                        <input type="text" name="rep_last_name" id="rep_last_name" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Business Logo/Image</label>
                        <div class="input-group mb-3">
                            <input type="file" name="business_logo" class="form-control" id="business_logo">
                          </div>
                    </div>
                    <div class="col-md-12 mt-3 mb-3">
                        <label for="email_address" class="form-label">Email Address</label>
                        <input type="email" name="email_address" id="email_address" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="col-md-6 mt-3 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="col-md-6 mt-3 mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" class="form-control">
                    </div>
                    <div class="col-md-12 text-center">
                        <input type="checkbox" name="agree" id="agree"> This is to certify that all information above are true and valid. I have also read the <a href="termscondition.html" target="_blank">Terms & Conditions</a>.
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" name="submitbusiness" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <?php require('footer.php'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>