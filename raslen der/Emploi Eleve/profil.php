<?php
$nump=$_POST["nump"];


require("conexion.php");

$req="SELECT * from profil where num_profil = '$nump';";
$res=mysqli_query($con,$req) or die("prb in res");
$f=mysqli_fetch_array($res);
echo"    <link rel='stylesheet' href='main.css'>
";
echo"<div class= 'bb'>profil N $f[0] <br>
<img src='$f[6]'>
nom: $f[1]
fromation: $f[2]
ecole: $f[3]
competences: $f[4]
experience:   $f[5]  
</div>

";

?>