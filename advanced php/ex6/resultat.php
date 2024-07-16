<?php


extract($_GET);

if (isset($operateur)) {
    if (is_numeric($a) && is_numeric($b)) {
    switch ($operateur) {
        case '+':
            $resultat = $a + $b;
            echo   htmlspecialchars( $resultat);
            break;

        case '-':
            $resultat = $a - $b;
            echo    htmlspecialchars( $resultat);

            break;
        case '*':
            $resultat = $a * $b;
            echo    htmlspecialchars( $resultat);

            break;
        case '/':
            if ($b== 0) {
                $resultat = "Erreur : division par zéro";
                echo    htmlspecialchars( $resultat);

                break;
            }else {
                $resultat = $a / $b;
                echo    htmlspecialchars( $resultat);

                break;
            }
            

        default:
            header("Location: calcul.html");
            break;
    }
    }else {
        header("Location: calcul.html");
        die();
    }
    
}else {
    header("Location: calcul.html");
    die();
}