<?php

    require('server.php');

    if (isset($_POST['submitcustomerlogin']))
    {
        $email_address =$_POST["email_address"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM customer WHERE email_address='$email_address';";

        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['first_name'] = $row['first_name'];
        
        if(empty($result) || $email_address == "" || $password == "")
        {
            $_SESSION['status'] = 'invalid';
            header("location: customerlogin.php");
            echo "<script> alert('You have entered an invalid email address and password.'); </script>";
        }
        else
        {
            $_SESSION['status'] = 'valid';
            header("location: cart.php");
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
<body>

    <?php include ('header.php');?>

    <main class="my-5 p-5">
        <br>
        <h2 class="text-center">
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
            <div class="col-6 d-grid gap-2 mx-auto">
                <button type="submit" name="submitcustomerlogin" class="btn btn-primary btn-md">Sign In</button>
            </div>
        </form>
    </main>

    <div>

        <p class="text-center">New User? Click <a href="customerreg.php">here</a> to register.</p>

    </div>


    <?php require('footer.php'); ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>