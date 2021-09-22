<?php

    require('server.php');

    function addCustomer(){
        if (isset($_POST['submitcustomer']))
        {
            $first_name = $_POST['first_name'];
            $middle_name = $_POST['middle_name'];
            $last_name = $_POST['last_name'];
            $contact_number = $_POST['contact_number'];
            $birthday = $_POST['birthday'];
            $email_address = $_POST['email_address'];
            $password = $_POST['password'];

            $queryInsertCustomer = "INSERT INTO customer (first_name, middle_name, last_name, contact_number, birthday, email_address, password) VALUES ('$first_name', '$middle_name', '$last_name', '$contact_number', '$birthday', '$email_address', '$password');";

            $sqlInsert = mysqli_query($connect, $queryInsertCustomer) OR trigger_error('Query failed SQL: '. $queryInsertCustomer);
            die;

            echo "<script> window.location.href = 'customerLogin.html'; </script>";
        }
    } 

?>