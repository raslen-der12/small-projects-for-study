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
    extract($_SESSION);
    echo "prenom : $prenom <br> nom: $nom";
    ?>
</body>
</html>