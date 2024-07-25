<?php

declare(strict_types=1);
function ErrUser() {
    if (isset($_SESSION["userErorr"])) {
        echo $_SESSION["userErorr"];
        unset($_SESSION["userErorr"]);
    }
}

function errorss() {
    if (isset($_SESSION["errors_login_cntrl"])) {
        $errorss= $_SESSION["errors_login_cntrl"];
        foreach ($errorss as $error) {
            if ($error === "empty field(s)" || $error === "username invalid") {
                echo  "<p class= 'form-text' style='color: red;'>". $error. "</p>";
            }
            }
            unset($_SESSION["errors_login_cntrl"]);

        
    }else{
        if (isset($_SESSION["errors_login_model"])) {
            echo  "<p class= 'form-text' style='color: red;'>  ". $_SESSION["errors_login_model"]. "</p>";
            unset($_SESSION["errors_login_model"]);
        }else {
            if (isset($_GET["login"]) && $_GET["login"]==="Success") {
                echo  "<p class= 'form-success'> Login Success !! </p>";
            }
        }
    }
}

