<?php

echo "hello";
require_once "../Classes/DB.php";
require_once "../Classes/Model.php";
require_once "../Classes/Sign.php";


$Model= new Mod($username,$password,$email,$name);
if ($Model->valid()) {
    $_SESSION["errors_signup_model"]="your email or username is already taken";
    if (!empty($name)) {
        $_SESSION["nameErr"] = $name;
    }

    header("Location: ../signup.php");
    die();
}


$Signup= new Sign($username,$password,$email,$name);
$Signup->signUser();
$_SESSION["user_list"]= [
    "username" => $username,
    "password" => $password,
    "email" => $email,
    "name"=> $name
    ];
header("Location: ../signup.php?signup=Success");
die();