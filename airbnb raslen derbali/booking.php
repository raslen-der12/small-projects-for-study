<?php

$numloc= $_POST["numloc"];
$numapp= $_POST["numapp"];
$datcheck= $_POST["datcheck"];
$duree= $_POST["duree"];

$cnx=mysqli_connect("localhost","root","","airbnb") or die("prob in cnx");

$req="SELECT idLoc from locataire where idLoc='$numloc'";
$res= mysqli_query($cnx,$req) or die("prob in req");
$req1="SELECT idApp from appartement where idApp='$numapp';";
$res1= mysqli_query($cnx,$req1) or die("prob in req1");
if (mysqli_num_rows($res)==0) {
    echo "Locataire non existant";
}else if(mysqli_num_rows($res1)==0){
    echo "appartement non existant";

}else{
    $d= date("Y-m-d");
    $req3="SELECT prix from appartement where idApp='$numapp' ;";
    $res3= mysqli_query($cnx,$req3) or die("prob in req3");
    $t=mysqli_fetch_array($res3);
    $p=$t[0]*$duree;
    $req2="INSERT into booking values('$numapp','$numloc','$d','$datcheck','$duree','$p');";
    $res2= mysqli_query($cnx,$req2) or die("prob in req2");
    if ($res2) {
        echo "Réservation faiteavecsuccès";
    }

}


?>