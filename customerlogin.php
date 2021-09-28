<?php

    require('server.php');
    

    session_start();

    if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status']))
    {
        $_SESSION['status'] = 'invalid';
    }

    if ($_SESSION['status'] == 'valid')
    {
        header('location: customerprofile.php');
    }

    $status = $_SESSION['status'];

    echo "<script> console.log('$status'); </script>";


    if(isset($_POST['submitcustomerlogin']))
    {
        $email_address = trim($_POST['email_address']);
        $password = trim($_POST['password']);

        if(empty($email_address || $password))
        {
            echo "Please provide your email address and password.";

            echo "<script> console.log('$status'); </script>";
        }
        else
        {
            $querySelect = "SELECT * FROM customer WHERE email_address = '$email_address';";
            $sqlCustLogin = mysqli_query($connect, $querySelect);
            $row = mysqli_fetch_assoc($sqlCustLogin);

            echo "<script> console.log('$status'); </script>";

            $current_password = $row['password'];

            if(password_verify($password, $current_password))
            {
                $_SESSION['first_name'] = $row['first_name'];
                $userAccess = "Customer";
                header('location: customerprofile.php');
            }
            else
            {
                $errorMsg = 'Login Failed. Please input registered email address and password.';

                echo "<script> alert('$errorMsg'); </script>";
            }

            if(mysqli_num_rows($sql) > 0 && password_verify($password, $current_password))
            {
                $_SESSION['status'] = 'valid';
                $_SESSION['userAccess'] = 'Customer';
                $_SESSION['customer_id'] = $row('customer_id');
                header('location: customerProfile.php');
            }
            else
            {
                $_SESSION['status'] = 'invalid';
                echo "Please create an account.";
            }

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require('css.php'); ?>

</head>
<body class="text-center">

<?php require('header.php'); ?>

    <main class="my-5">
        <br>
        <h2 class="align-center">
            Customer Login
        </h2>
        <form action="customerlogin.php" method="POST" class="formSignin my-5">
            <div class="form-floating">
                <input type="email" name="email_address" id="floatingInpute" placeholder="Email Address" class="form-control">
                <label for="floatingInpute">Email Address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" id="floatingInputp" placeholder="Password" class="form-control">
                <label for="floatingInputp">Password</label>
            </div>
            <br>
            <div class="col-6 mx-auto">
                <button type="submit" name="submitcustomerlogin" class="btn btn-primary btn-md">Sign In</button>
            </div>
        </form>
    </main>

    <div>

        <p>New User? Click <a href="customerreg.php">here</a> to register.</p>

    </div>


    <?php require('footer.php'); ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>