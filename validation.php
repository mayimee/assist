<?php

    $first_name = $middle_name = $last_name = $contact_number = $birthday = $business_name = $type_business = $rep_first_name = $rep_last_name = $business_logo = $email_address = $password = $confirm_password = "";

    $first_nameErr = $middle_nameErr = $last_nameErr = $contact_numberErr = $birthdayErr = $business_nameErr = $type_businessErr = $rep_first_nameErr = $rep_last_nameErr = $business_logoErr = $email_addressErr = $passwordErr = $confirm_passwordErr = "";

    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        if(empty($_POST["first_name"]))
        {
            $first_nameErr = "First Name is required.";
        }
        else 
        {
            $first_name = checkInput($_POST["first_name"]);
            if(!preg_match("/^[a-zA-Z]*$/", $first_name  ))
            {
                $first_nameErr = "Only letters are allowed.";
            }
        }

        if(empty($_POST["middle_name"]))
        {
            $middle_nameErr = "Middle Name is required. Type NA if not applicable";
        }
        else 
        {
            $middle_name = checkInput($_POST["middle_name"]);
            if(!preg_match("/^[a-zA-Z]*$/", $middle_name  ))
            {
                $middle_nameErr = "Only letters are allowed.";
            }
        }

        if(empty($_POST["last_name"]))
        {
            $last_nameErr = "Last Name is required.";
        }
        else 
        {
            $last_name = checkInput($_POST["last_name"]);
            if(!preg_match("/^[a-zA-Z]*$/", $last_name  ))
            {
                $last_nameErr = "Only letters are allowed.";
            }
        }

        function checkInput($data)
        {
                    
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;

        }
    }

?>