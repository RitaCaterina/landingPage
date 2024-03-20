<?php

$company_nameErr=$full_nameErr=$emailErr=$phoneErr=$serviceErr='';
$company_name=$full_name=$email=$phone=$service='';
// Validazione lato server in PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["company_name"])) {
      $nameErr = "company name is required";
    } else {
      $company_name = test_input($_POST["company_name"]);
    }

    if(empty($_POST["full_name"])){
        $full_nameErr="full name is required";
    }
  
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
    
    if (empty($_POST["phone"])) {
      $phoneErr = "phone is required";
    } else {
      $phone = test_input($_POST["phone"]);
    }
    
    if (empty($_POST["service"])) {
      $service = "service is required";
    } else {
      $service = test_input($_POST["service"]);
    }
    
  }
?>
