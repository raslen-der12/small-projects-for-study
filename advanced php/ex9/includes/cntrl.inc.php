<?php

require_once "./Class/Contrle.php";

function verif() {

if (isset($_POST["gen"])) {
    extract($_POST);
    $Valid= new Cntrl($nom, $pre, $ddn, $gov,$cdp, $adr, $usn, $mdp, $rpw, $dom, $atd);
        if ($Valid->validation()=== []) {
            $_SESSION["list"]=$_POST;
            header("Location: affichage.php");
            die();
        }elseif($Valid->validation()=== "false"){
            $_SESSION["vide"]="tout les choix obligatoire";
        }else{
            $_SESSION["Err"]= $Valid->validation();
        }
}else{
    $_SESSION["vide"]="tout les coix obligatoire";

}
}