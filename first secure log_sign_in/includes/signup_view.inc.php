<?php


declare(strict_types=1);
require_once "session.inc.php";

function ErrName() {
    
    if (isset($_SESSION["nameErr"])) {
        echo $_SESSION["nameErr"];
        unset($_SESSION["nameErr"]);
    }
}
function ErrEmail() {
    if (isset($_SESSION["emailErr"])) {
        echo $_SESSION["emailErr"];
        unset($_SESSION["emailErr"]);
    }
}
function ErrUserName() {
    if (isset($_SESSION["userNameErr"])) {
        echo $_SESSION["userNameErr"];
        unset($_SESSION["userNameErr"]);
    }
    
}
function errors() {
    

if (isset($_SESSION["errors_signup_model"])) {
    $errors = $_SESSION["errors_signup_model"];
    echo  "<p class= 'form-text' style='color: red;'>  ". $errors. "</p>";
    unset($_SESSION["errors_signup_model"]);
    unset($_SESSION["errors_signup_cntrl"]);


}else{
    if (isset($_SESSION["errors_signup_cntrl"])) {
        $errors = $_SESSION["errors_signup_cntrl"];
        foreach ($errors as $error) {
            if ($error !== "false") {
                echo  "<p class= 'form-text' style='color: red;'>". $error. "</p>";
            }
            }
            unset($_SESSION["errors_signup_cntrl"]);
    }else {
        if (isset($_GET["signup"]) && $_GET["signup"]==="Success") {
            echo  "<p class= 'form-success'> Signup Success !! </p>";
        }
    }
}
}