<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=== "POST") {
    extract($_POST);
    function vide($x){
        if (empty($x)) {
            header("Location: convertisseur.php");
            exit;
        }
    }
    vide($num);
    vide($coin);
    if ($coin=="EUR" && is_numeric($num)) {
        $resultat = "en EUR =". $num *0.29;
    }
    elseif ($coin=="USD" && is_numeric($num)) {
        $resultat = "en USD =". $num *0.32;
    }else {
        header("Location: convertisseur.php");
        exit;
    }

}
    ?>
    <style>
        form{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 10px;
            padding: 30px ;
            width: max-content;
            margin: auto;
            border: solid blue 2px;
        }
    </style>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <div><label for="">Montant en Dinar tunisien</label></div>
            <div><input type="text" name="num" value='<?php  if($_SERVER["REQUEST_METHOD"]=== "POST") {
                echo htmlspecialchars($num) ;
            } ?>'></div>
            <div><label for=""> Comvertir en</label></div>
            <div><select name="coin" >
                <option value=""> choisisser votre nommaie</option>
                <option value="EUR">Euro (EUR)</option>
                <option value="USD">Dollar (USD)</option>
            </select></div>
            <div><label for=""> Resultat</label></div>
            <div><input type="text" value="<?php  if($_SERVER["REQUEST_METHOD"]=== "POST") {
                echo $resultat;
            } ?>" readonly></div>
            <div> <input type="submit" value="convertir"></div>
    </form>
</body>
</html>