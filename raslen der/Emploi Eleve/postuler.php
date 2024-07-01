<?php

require("conexion.php");
$nump= $_POST["nump"];
$pos= $_POST["pos"];

$req1="SELECT num_profil from profil where num_profil = '$nump';";
$res1= mysqli_query($con,$req1) or die("prb in res1");
if (mysqli_num_rows($res1)==0) {
    echo "<h1>numéro profil non reconnu</h1>";
}else {
    $req2="SELECT experience ,diplome from profil where num_profil = '$nump';";
    $res2= mysqli_query($con,$req2) or die("prb in res2");
    $f=mysqli_fetch_array($res2);
    $req3="SELECT niveau ,annee_exp from profil where nom_poste = '$pos';";
    $res3= mysqli_query($con,$req3) or die("prb in res3");
    $f1=mysqli_fetch_array($res3);
    if ($f[0]<$f2[0] or $f[1] != $f1[0]) {
        echo "profil non compatible";
    }else{
        $req4="INSERT into candidateur values('$nump','$pos') ;";
        $res4= mysqli_query($con,$req4) or die("prb in res4");
        if (mysqli_num_rows($res1)!=0) {
            echo "<h1>candidature envoyée</h1>
            <form method='post'action='profil.php'>
            <input hidden='true' name='nump' value='$nump'>
            </form>
            ";

        }

    }

}


?>