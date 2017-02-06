<?php 

include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = secure($_POST['name']);
    $email = secure($_POST['email']);
    $mobile = secure($_POST['mobile']);
    $password = secure($_POST['password']);
    $username = secure($_POST['username']);

    $error = [];
    // Validate username
    if( empty($username) )
        $error['username'] = "username cannot be empty..!!";
    elseif ( strlen($username) < 5 )
        $error['username'] = " Username Must be 5 character long";
    elseif (  !ctype_alnum($username) )
        $error['username'] = "Username must contain only numbers and digits";

    // Validate Email
    if( empty($email) )
        $error['email'] = "Email cannot be empty !!";
    elseif ( !validateEmail($email) )
        $error['email'] = "Invalid Email !!!";

    // Validate Phone number
    if ( !is_numeric($mobile) || strlen($mobile) != 11 )
        $error['mobile'] = "Invalid Mobile Number: Must be 11 digit";

    // Validate Password
    if ( empty($password) )
        $error['password'] = "Password cannot be empty";
    elseif ( !validatePassword($password) )
        $error['password'] = "Password Must be 8 character long and can only contain numbers and letters";

    if ( empty($error) )
        redirect_to("success.php");
}

require 'index.view.php';
