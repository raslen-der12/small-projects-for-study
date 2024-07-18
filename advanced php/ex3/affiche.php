<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once "session.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_SESSION["list"])) {
        $_SESSION["list"]=$_POST;
        echo"Consultation de: <br>";
    }

}else{
    header("Location: formulaire1.html");
    die();
}
?>

<a href="etat_civil.php"> votre etat civil</a>
<br>
<a href="adresse.php"> votre adresse</a>
</body>
</html>