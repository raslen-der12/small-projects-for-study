<?php
$r=$_POST["r"];
require("conexion.php");


$req="SELECT num_profil ,diplome ,competences,experience from profil where diplome like(%$r%);";
$res=mysqli_query($con,$req) or die("prb in res2");
while ($f=mysqli_fetch_array($res)) {
    echo"
    profil N $f[0]<br> fromation:<br> $f[1] <br> competences: $f[2] <br> <mark>experience:$f[3]</mark>
    <l>
    ";
};




?>