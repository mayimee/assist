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

        if(empty($_POST["address"]))
        {
            $addressErr = "Address is required.";
        }
        else 
        {
            $address = checkInput($_POST["address"]);
        }

        if(empty($_POST["business_name"]))
        {
            $business_nameErr = "Business Name is required.";
        }
        else 
        {
            $business_name = checkInput($_POST["business_name"]);
        }

        if(empty($_POST["rep_first_name"]))
        {
            $rep_first_nameErr = "First Name is required.";
        }
        else 
        {
            $rep_first_name = checkInput($_POST["rep_first_name"]);
            if(!preg_match("/^[a-zA-Z]*$/", $rep_first_name  ))
            {
                $rep_first_nameErr = "Only letters are allowed.";
            }
        }

        if(empty($_POST["rep_last_name"]))
        {
            $rep_last_nameErr = "Last Name is required.";
        }
        else 
        {
            $rep_last_name = checkInput($_POST["rep_last_name"]);
            if(!preg_match("/^[a-zA-Z]*$/", $rep_last_name  ))
            {
                $rep_last_nameErr = "Only letters are allowed.";
            }
        }

        if(empty($_POST["business_logo"]))
        {
            $business_logoErr = "Business Logo/Image is required.";
        }
        else 
        {
            $business_logo = checkInput($_POST["business_logo"]);
        }
        
        if(empty($_POST["type_business"]))
        {
            $type_businessErr = "Choose a type of business.";
        }
        else 
        {
            $type_business = checkInput($_POST["type_business"]);
        }       

        if(empty($_POST["contact_number"]))
        {
            $contact_numberErr = "Contact Number is required.";
        }
        else 
        {
            $contact_number = checkInput($_POST["contact_number"]);
            if(!preg_match("/^[0-9]*$/", $contact_number))
            {
                $contact_numberErr = "Only numbers are allowed.";
            }
        }

        if(empty($_POST["email_address"]))
        {
            $email_addressErr = "Email Address is required.";
        }
        else 
        {
            $email_address = checkInput($_POST["email_address"]);
                    
            if (!filter_var($email_address, FILTER_VALIDATE_EMAIL))
            {
                $email_addressErr="Please provide a valid email address.";
            }
        }

        if(empty($_POST["password"]))
        {
            $passwordErr = "Password is required.";
        }
        else 
        {
            $password = checkInput($_POST["password"]);
        }

        if(empty($_POST["confirm_password"]))
        {
            $confirm_passwordErr = "Confirm Password is required.";
        }
        else 
        {
            $confirm_password = checkInput($_POST["confirm_password"]);
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