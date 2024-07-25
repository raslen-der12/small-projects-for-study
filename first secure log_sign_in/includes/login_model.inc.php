<?php

require_once "../Classes/DB.php";
require_once "../Classes/Model.php";
require_once "../Classes/Login.php";

$Mod= new Model($user,$password,$type);
if ($Mod->login()!=="true") {
    $_SESSION["errors_login_model"]=$Mod->login();
    if ($Mod->login() === "password wrong") {
        $_SESSION["userErorr"]=$user;

    }
    header("Location: ../login.php");
    die();
}

$Log= new Login($user);
$Log->logUser();