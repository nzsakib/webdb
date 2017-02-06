<?php 

// Secure User Input
function secure($input)
{
    return htmlspecialchars(trim($input));
}

function redirect_to($path)
{
    header("Location: {$path}");
}

function validateEmail($email)
{
    $len = strlen($email);
    $is_at = false;
    $dot = false;

    for ($i=0; $i < $len; $i++)
    {
        if ($email[$i] == '@')
            $is_at = true;
        if($is_at && $email[$i] == '.')
            $dot = true;
    }

    return ($is_at && $dot);
}

// This is a helper function 
function dd($input)
{
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
    die();
}

function validatePassword($password)
{

    return ( strlen($password) < 8 || ctype_alnum($password) );
}

function old($input)
{
    return isset($_POST[$input]) ? $_POST[$input] : "";
}
