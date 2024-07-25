<?php
require_once "includes/session.inc.php";
unset($_SESSION["user_list"]);

session_unset();
header("Location: login.php?logout=true");