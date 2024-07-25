<?php




require_once "C:/xampp/htdocs/dashboard/first secure log_sign_in/Classes/Controle.php";
$Valid= new Ctrl($username,$password,$pwd,$email,$name);
if($Valid->check() !== []){
    $_SESSION["errors_signup_cntrl"]=$Valid->check();
    if (!empty($name)) {
        $_SESSION["nameErr"] = $name;
        }else {
            $_SESSION["nameErr"] = "";
        }
    if ($Valid->check()["invalid_email"] === "false") {
        $_SESSION["emailErr"] = $email;
        }else{
            $_SESSION["emailErr"] = "";
        }
    if ($Valid->check()["invalid_username"] === "false") {
        $_SESSION["userNameErr"] = $username;
        }else{
            $_SESSION["userNameErr"] = "";
        }

    header("Location: ../signup.php");
    die();
    }

require_once "C:/xampp/htdocs/dashboard/first secure log_sign_in/includes/signupModel.inc.php";
        
