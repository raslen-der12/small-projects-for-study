<?php
$add=$_POST["add"];
$prixb=$_POST["prixb"];
$prixe=$_POST["prixe"];
$chbb=$_POST["chbb"];

$cnx=mysqli_connect("localhost","root","","airbnb") or die("prob in cnx");

if ($chbb == "1") {
    $req="SELECT * from appartement where prix between $prixb and $prixe and adress = '$add'  order by prix asc ;";
    $res=mysqli_query($cnx,$req) or die("prob in reqw".mysqli_error($cnx));
    while ($t=mysqli_fetch_array($res)) {
        echo" <table style='border:'> <tr>
        <td>$t[0]</td><td>$t[1]</td><td>$t[2]</td><td>$t[3]</td>
        <td>$t[4]</td><td>$t[5]</td><td>$t[6]</td><td>$t[7]</td>
        </tr>
         ";
    }
    echo"</table>";
}else{
$req="SELECT * from appartement where prix between('$prixb' and '$prixe');";
$res=mysqli_query($cnx,$req) or die("prob in req".mysqli_error($cnx));

while ($t=mysqli_fetch_array($res)) {
    echo" <table> <tr>
    <td>$t[0]</td><td>$t[1]</td><td>$t[2]</td><td>$t[3]</td>
    <td>$t[4]</td><td>$t[5]</td><td>$t[6]</td><td>$t[7]</td>
    </tr>
     ";
}
echo"</table>";

}




?>