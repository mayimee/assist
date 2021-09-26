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

<?php require('navbar.php'); ?>

    <main class="my-5 py-5">
        <br>
        <h2 class="align-center">
            Service Provider Login
        </h2>
        <form class="formSignin">
            <div class="form-floating">
                <input type="email" name="email" id="floatingInput" placeholder="Email Address" class="form-control">
                <label for="floatingInput">Email Address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" id="floatingInput" placeholder="Password" class="form-control">
                <label for="floatingInput">Password</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-md">Sign In</button>
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