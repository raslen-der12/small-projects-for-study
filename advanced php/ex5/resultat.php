<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .green{
            color: green;
        }
        .red{
            color: red;
        }
    </style>
    <?php
    if ($_SERVER["REQUEST_METHOD"]=== "POST") {
        
    
    extract($_POST);
    $n1= htmlspecialchars($n1);
    $n2= htmlspecialchars($n2);
    $n3= htmlspecialchars($n3);
    echo "<p class='green'> $n1 est-il compris entre $n2 et $n3 ?</p>";

    if ($n1 >= $n2 && $n1 <= $n3) {
        echo "<p class='red'>Oui $n1  est compris entre $n2 et $n3 </p>";
    }else{
        echo "<p class='red'>Non $n1 n'est pas compris entre $n2 et $n3 </p>";

    }
}else {
    header("Location: nombres.html");
    die();
}
    
    
    
    ?>

</body>
</html>