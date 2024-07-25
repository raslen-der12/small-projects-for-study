<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    extract($_POST);
    

    try {
        require_once "session.inc.php";
        session_unset();
        require_once "signup_cntrl.inc.php";

    } catch (PDOException $e) {
        die("connection failed:".$e->getMessage());
    }
    

}else {
    header("Location: ../signup.php");
    exit();
}
