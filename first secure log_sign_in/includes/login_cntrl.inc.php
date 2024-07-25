<?php


require_once "C:/xampp/htdocs/dashboard/first secure log_sign_in/Classes/Controle.php";

$ctl= new Control($user,$password);
if (($ctl->logsInput()["input_type"] !== "email" && $ctl->logsInput()["input_type"] !== "username") || $ctl->logsInput()["empty_input(s)"] ==="empty field(s)") {
    $_SESSION["errors_login_cntrl"]=$ctl->logsInput();
    header("Location: ../login.php");
    die();
}else{
    $type=$ctl->logsInput()["input_type"];

    require_once "login_model.inc.php";
    $type="";
    
}
