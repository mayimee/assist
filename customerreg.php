<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>

    <?php require('css.php'); ?>

</head>
<body>

<?php 


    require('header.php'); 
    require('validation.php');

?>

    <main class="p-5 mt-5 container">
        <div>
            <br>
            <br>
            <h3 class="text-center">Customer Registration</h3>
            <form action="createaccount.php" method="POST"> 
                <div class="row">
                    <div class="col-sm-4 mt-3 mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control">
                        <span class="error"><?php echo $first_nameErr; ?> </span>
                    </div>
                    <div class="col-sm-4 mt-3 mb-3">
                        <label for="middle_name" class="form-label">Middle Name</label>
                        <input type="text" name="middle_name" id="middle_name" placeholder="Middle Name" class="form-control">
                        <span class="error"><?php echo $middle_nameErr; ?> </span>
                    </div>
                    <div class="col-sm-4 mt-3 mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control">
                        <span class="error"><?php echo $last_nameErr; ?> </span>
                    </div>

                    <div class="col-sm-6 mt-3 mb-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="number" name="contact_number" id="contact_number" placeholder="Contact Number" class="form-control">
                        <span class="error"><?php echo $contact_numberErr; ?> </span>
                    </div>
                    <div class="col-sm-6 mt-3 mb-3">
                        <label for="birthday" class="form-label">Birthday</label>
                        <input type="date" name="birthday" id="birthday" placeholder="Birthday" class="form-control">
                    </div>

                    <div class="col-sm-12 mt-3 mb-3">
                        <label for="email_address" class="form-label">Email Address</label>
                        <input type="email" name="email_address" id="email_address" placeholder="Email Address" class="form-control">
                        <span class="error"><?php echo $email_addressErr; ?> </span>
                    </div>
                    <div class="col-sm-6 mt-3 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                        <span class="error"><?php echo $passwordErr; ?> </span>
                    </div>
                    <div class="col-sm-6 mt-3 mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirmPassword" placeholder="Confirm Password" class="form-control">
                        <span class="error"><?php echo $confirm_passwordErr; ?> </span>
                    </div>
                    <div class="col-md-12 text-center">
                        <input type="checkbox" name="agree" id="agree" required> This is to certify that all information above are true and valid. I have also read the <a href="termscondition.php" target="_blank">Terms & Conditions</a>.
                    </div>
                    <br>
                    <div class="col-md-3 d-grid mx-auto gap-2 mt-5 mb-3">
                        <button type="submit" name="submitcustomer" class="btn btn-primary justify-content-center">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <?php require('footer.php'); ?>

    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>