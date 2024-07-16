<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    fieldset{
        padding: 30px ;
        width: max-content;
        margin: auto;
    }
    div{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr ;

    grid-gap: 10px;

}
    a{
        margin: 20px;;
    }
    </style>
    
<?php


require_once "session.php";



if(!isset($_SESSION['npre'])) {
    header("Location: index.php");
    exit;
    }

extract($_SESSION);
$npre=htmlspecialchars($npre);
$mail=htmlspecialchars($mail);
$mdp=htmlspecialchars($mdp);

?>
<fieldset>
    <legend>Mon Profil</legend>
    <div>
<a href="bienvenue.php">Accueil</a> 
<a href="profil.php">Mon profil</a>
<a href="deconnexion.php">Deconnexion</a>
<br><br><br>
<h2>Bienvenue <?php


echo $npre ."</h2>
</div>

<p>Nom et Prenom: $npre </p>

<p>Email: $mail </p>

<p>Mot de passe: $mdp </p>


";




?>
</fieldset>

</body>
</html>