<?php

extract($_POST);
echo " <head>
<link  rel='stylesheet' href='style.css'>
</head>";
require("config.php");
$req1= "select * from client where email='$mail' or idCli='$numv';"; 
$res1= mysqli_query($cnx,$req1) or die("prob in req1");

if (mysqli_num_rows($res1) != 0) {
    echo "
         <div class='divc'>
         <h1 class='h11'> this email or visa already exist</h1>
        <a href='index.html'>do you want to log in</a><br>
        <a  href='sing.html' >go back to sing in </a>
        </div>
    
      ";
}else {
    $req2="insert into client values('$numv','$mail','$npre','$pays');";
    $res2= mysqli_query($cnx,$req2) or die ("problem in requet2");
    if(mysqli_affected_rows($cnx) != 0){
        echo "
   <div class='divc'>
   <h1 class='h11'> you are new client </h1>
   <a href='index.html'>do you want to log in</a>
   </div>";
    }
}


?>