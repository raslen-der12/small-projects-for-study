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
extract($_POST);
$_SESSION["list"]=$_POST;
// $_SESSION["prenom"] = $prenom;
// $_SESSION["nom"] = $nom;
// $_SESSION["adr"] = $adr;
// $_SESSION["ville"] = $ville;
// $_SESSION["cdp"] = $cdp;

echo"Consultation de: <br>";
?>

<a href="etat_civil.php"> votre etat civil</a>
<br>
<a href="adresse.php"> votre adresse</a>
</body>
</html>