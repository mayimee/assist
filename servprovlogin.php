<?php

    require('server.php');

    session_start();

    if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status']))
    {
        $_SESSION['status'] = 'invalid';
    }

    if ($_SESSION['status'] == 'valid')
    {
        header('location: servprovprofile.php');
    }

    $status = $_SESSION['status'];

    echo "<script> console.log('$status'); </script>";


    if(isset($_POST['servprovlogin']))
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
            $querySelect = "SELECT * FROM service_provider WHERE email_address = '$email_address';";
            $sqlCustLogin = mysqli_query($connect, $querySelect);
            $row = mysqli_fetch_assoc($sqlCustLogin);

            echo "<script> console.log('$status'); </script>";

            $current_password = $row['password'];

            if(password_verify($password, $current_password))
            {
                $_SESSION['business_name'] = $row['business_name'];
                $userAccess = "Service Provider";
                header('location: servprovprofile.php');
            }
            else
            {
                $errorMsg = 'Login Failed. Please input registered email address and password.';

                echo "<script> alert('$errorMsg'); </script>";
            }

            if(mysqli_num_rows($sql) > 0 && password_verify($password, $current_password))
            {
                $_SESSION['status'] = 'valid';
                $_SESSION['userAccess'] = 'Service Provider';
                $_SESSION['service_provider_id'] = $row('service_provider_id');
                header('location: servprovprofile.php');
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
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">  

    <link href="css/style_Marielle.css" rel="stylesheet">

</head>
<body class="text-center">

<?php require('navbar_notLoggedIn.php'); ?>

    <main class="my-5 py-5">
        <br>
        <h2 class="align-center">
            Service Provider Login
        </h2>
        <form action="servprovlogin.php" method="POST" class="formSignin">
            <div class="form-floating">
                <input type="email" name="email" id="floatingInput" placeholder="Email Address" class="form-control">
                <label for="floatingInput">Email Address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" id="floatingInput" placeholder="Password" class="form-control">
                <label for="floatingInput">Password</label>
            </div>
            <br>
            <button type="submit" name="servprovlogin" class="btn btn-primary btn-md">Sign In</button>
        </form>
    </main>

    <div>

        <p>New User? Click <a href="servprovreg.php">here</a> to register.</p>

    </div>

    <?php require('footer.php'); ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>