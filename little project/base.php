<?php
extract($_POST);
echo "
<link  rel='stylesheet' href='style.css'>
";
require("config.php");
$req2="select * from client where email='$email';";
$res2= mysqli_query($cnx,$req2) or die("prob in req2");
$t1= mysqli_fetch_array($res2);
if (mysqli_num_rows($res2) != 0) {
    if ($t1[0] != $numvi) {
        echo "
            
            <div class= 'divc'>
            <h1 class='h11'> Votre numéro de passport est incorrect
            </h1>
            <a href='index.html'>keep trying</a>
            </div>
        ";
    }else {
        
        echo "
         <div class= 'divc'>
         <h1 class='h11'>you are loged to your account </h1>
        <form action='travel.php' method='POST'>

        <input type='text' hidden='true' name='email' value='$email'>
        <input type='text' hidden='true' name='numvi' value='$numvi'>

        <input type='submit' class='inn'value='do you want traveling?'>
        </form>
        </div>

    ";

    }
}else {
$req1= "select * from client where email='$email' and idCli='$numvi';"; 

$res1= mysqli_query($cnx,$req1) or die("prob in req1");

if (mysqli_num_rows($res1) == 0) {

    echo "

        <div class='divc'>
        <h1 class = 'h11'> this email dosen't exist</h1>
        <a href='sing.html'>return to sing in</a>
        </div>
      ";
}
}
