<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"]=== "POST") {
        extract($_POST);
    }
    
    ?>
    <style>
        h2{
            text-align: center;
        }
        form{
            width: 20%;
            padding: 30px;
            margin: auto ;
            border-radius: 6px;
            border: 2px solid rgb(94, 110, 49);
        }
        .green{
            color: green;
        }
        .red{
            color: red;
        }
        input[type="submit"]{
            margin-top:15px;
            width: 100%;
            padding: 10px;
            background: yellow;
            color: white;
            border-radius: 9px;
            border: 1px solid rgb(94, 110, 49);

        }
    </style>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <h2>PHP: obtenir les valeurs de plusieurs cases a cocher cochees</h2>
        <p>Identifier vos competences:</p>
        <input type="checkbox" name="box1" value="ASP" <?php if (isset($box1)) {echo "checked";} ?> >ASP<br>
        <input type="checkbox" name="box2" value="Java" <?php if (isset($box2)) {echo "checked";} ?> >Java<br>
        <input type="checkbox" name="box3" value="PHP" <?php if (isset($box3)) {echo "checked";} ?> >PHP<br>
        <input type="checkbox" name="box4" value="HTML/CSS" <?php if (isset($box4)) {echo "checked";} ?> >HTML/CSS<br>
        <input type="checkbox" name="box5" value="JavaScript" <?php if (isset($box5)) {echo "checked";} ?> >JavaScript<br>
        <input type="submit" value="submit">
    
    <?php 
        if ($_SERVER["REQUEST_METHOD"]=== "POST") {
            $i=0;
            $ch="";
           
                if (isset($box1)) {
                $i++;
                $ch.=$box1."<br>";
                }
                if (isset($box2)) {
                    $i++;
                    $ch.=$box2."<br>";
                    }
                if (isset($box3)) {
                    $i++;
                    $ch.=$box3."<br>";
                    }
                if (isset($box4)) {
                    $i++;
                    $ch.=$box4."<br>";

                    }
                if (isset($box5)) {
                    $ch.=$box5."<br>";
                    }
                
                if (isset($box1) || isset($box2) || isset($box3) || isset($box4) || isset($box5)) {
                    echo " <br><br>Vous avez selectionne les $i option(s) suivante(s): <br><span class='green'> $ch</span>";
                    }else {
                        echo "<p class='red'>Veuillez selectionner au moins une option</p>";
                        }
        }
    
    
    ?>
    </form>
    
</body>
</html>