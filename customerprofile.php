<?php

    require('server.php');
    //require('session.php');

    if (isset($_SESSION['userAccess']) === 'Customer')
    {
        $message = "Welcome" . $_SESSION['email_address'];
    }

    $status = $_SESSION['status'];

    echo "<script> console.log('Status: $status'); </script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">  

    <link href="css/style.css" rel="stylesheet">

</head>
<body>
    
    <?php

        $message

    ?>

    Welcome to Assist! Customer Dashboard

    <?php require('footer.php'); ?>
</body>
</html>