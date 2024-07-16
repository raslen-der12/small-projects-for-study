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
            display: grid;
            grid-template-columns: 1fr 1fr 1fr ;

            grid-gap: 10px;
            padding: 30px ;
            width: max-content;
            margin: auto;

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
$npre= htmlspecialchars($_SESSION["npre"]);

?>
<fieldset>
    <legend>Bienvenue</legend>
<a href="bienvenue.php">Accueil</a> 
<a href="profil.php">Mon profil</a>
<a href="deconnexion.php">Deconnexion</a>
<br><br><br>
<h2>Bienvenue <?php echo $npre ?></h2>

</fieldset>


</body>
</html>
