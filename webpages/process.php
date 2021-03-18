<?php

    require 'S3.php';
    $email=null;
    $password=null;
    //this function is used to remove special characters(added by htmlspecialchars function),white spaces(by user) for entered form data
    function remove_special_chars($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email_error="";
    $password_error="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email = remove_special_chars($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_error="*Email format is incorrect!";
        }
        $password = remove_special_chars($_POST["password"]);

        if(!preg_match("/^[a-zA-Z0-9]+[@#$]/",$password)){
            $password_error="*Password should contain atleast one capital,one small and a number";
        }
    }

    // $data = array("email"=>$email,"password"=>$password);
    // $bucket_name = "temp-by-vishnu";

    // S3::putObject(
    //     $data,
    //     $bucket_name,
    //     "data",
    //     S3::ACL_PUBLIC_READ,
    //     array(),
    //     array(),
    //     S3::STORAGE_CLASS_STANDARD
    // )
    return ["email_error"=>$email_error,"password_error"=>$password_error];
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
?>