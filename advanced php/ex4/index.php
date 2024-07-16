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
            grid-template-columns: 1fr 1fr ;
            grid-gap: 10px;
            padding: 30px;
            width: max-content;
            margin: auto;

        }
        p{
            color: red;
        }
    </style>
    <form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post">

        <fieldset>
            <legend>Formulaire d'inscription</legend>
            <div><label >Nom et prenom</label></div>
            <div><input type="text" name="npre" value="<?php if (isset($_POST["npre"])) {
                echo $_POST["npre"];
            }?>" ></div>
            <div><label> Email</label></div>
            <div><input type="email" name="mail" value="<?php if (isset($_POST["mail"])) {
                echo $_POST["mail"];
            }?>" ></div>
            <div><label>Mot de passe</label></div>
            <div><input type="password" name="mdp" value="<?php if (isset($_POST["mdp"])) {
                echo $_POST["mdp"];
            }?>" ></div>
            <div><input type="submit" value="Inscription"></div>
        </fieldset>
    </form>

    <?php
    require_once "session.php";
    $i=0;
    if( $_SERVER["REQUEST_METHOD"]=== "POST"){
    if (empty($_POST["npre"])) {
        echo "<p>Veuillez taper votre nom et prenom </p>";
    }else{
        $_SESSION["npre"]= $_POST["npre"];
        $i++;
    }
    
    if (empty($_POST["mail"])) {
        echo "<p>Veuillez taper votre email </p>";

    }else{
        $_SESSION["mail"]= $_POST["mail"];
        $i++;

    }
    if (empty($_POST["mdp"])) {
        echo "<p>Veuillez taper votre mot de passe </p>";

    }else{
        $_SESSION["mdp"]= $_POST["mdp"];
        $i++;
    }
    if ($i==3) {
        header("Location: bienvenue.php");


    }
}else{
    die();

}

    
    
    ?>
</body>
</html>