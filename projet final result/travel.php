<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="style.css">
   <script src="test.js" ></script>

</head>
<body class="bo">

   <header class='heed'>
      <div class="of">
      <img  src="profile.png"  onclick="ver()" width=70 alt="your account">
      <div class="profile" style="display:none;">
         <?php
         $email = $_POST["email"];
         $numvi = $_POST["numvi"];
         require("config.php");

         $req="select * from client where email='$email';";
         $req1 ="select nomP from pays p , client c where p.idPays = c.idPays and c.email = '$email';";
         $res= mysqli_query($cnx,$req) or die("prob in req");
         $res1= mysqli_query($cnx,$req1) or die("prob in req1");
         $t= mysqli_fetch_array($res);
         $t1= mysqli_fetch_array($res1);



         echo "<section class='sec'> <p class='doo'>name and prename : ". $t[2]." </p> 
         <p class='doo'>Email: ". $email . "</p>
         <p class='doo'>Numero de  visa: ". $numvi."</p>
         <div class='doc'><p class='doo'>votre pays :</p> <img src='$t1[0].png' id='imgg' width='60'></div>
         </section>  
         ";
         $req2="select nomP,raisen,datbp,datend from visa v , client c ,pays p where c.idCli='$numvi' and v.idCli = c.idCli and v.idPays=p.idPays order by datend desc;";
         $res=mysqli_query($cnx,$req2) or die("prob in req2");
         echo"               <h2>your travel history:</h2>";
         if (mysqli_num_rows($res)==0) 
            echo "<h1 class='hh11'>you don't have any travel yet!</h1>";
         else{
         while ($d=mysqli_fetch_array($res))
            {
               echo "
               <table class='tab1'>
                  <tr>
                     <td>pay:$d[0]</td>
                     <td>raisen:$d[1]</td>
                     <td>date depart: $d[2]</td>
                     <td> date arrivee: $d[3]</td>
                  </tr>
               </table>
               ";

            }
            echo"<div class='gohome'> <h1 class='hh1'>that's it</h1></div>";

            }

         ?>
         <div>
         <a href="index.html">log out</a>
         </div>
      </div>
      </div>
      <h1 class="off"> welcome to my site travel try to get your visa</h1>

   </header>
   <section class="ever">
      <h2> which country do you want to go to?  </h2>
      <div class="sect">
      <div class="c1">
         <form action="un.php" method="POST">
            <input type="text" hidden="true" name="email" value="<?php echo $email;?>"/>
            <input type="text" hidden="true" name="numvi" value="<?php echo $numvi;?>"/>
            <input type="text" hidden="true" name="nom" value="<?php echo $t[2];?>"/>
            <input type="text" hidden="true" name="idPay" value="6"/>
            <input type="text" hidden="true" name= "im"value="america.jpg">
            <input class="inp" type="submit" value="USA">

         </form>
      </div>
      <div class="c2">
         <form action="un.php" method="POST">
            <input type="text" hidden="true" name="email" value="<?php echo $email;?>"/>
            <input type="text" hidden="true" name="numvi" value="<?php echo $numvi;?>"/>
            <input type="text" hidden="true" name="nom" value="<?php echo $t[2];?>"/>
            <input type="text" hidden="true" name="idPay" value="1"/>
            <input type="text" hidden="true" name= "im" value="tunisia.jpg">

            <input class="inp" type="submit" value="TUNISIA">

         </form>
         
      </div>
      <div class="c3">
      <form action="un.php" method="POST">
            <input type="text" hidden="true" name="email" value="<?php echo $email;?>"/>
            <input type="text" hidden="true" name="numvi" value="<?php echo $numvi;?>"/>
            <input type="text" hidden="true" name="nom" value="<?php echo $t[2];?>"/>
            <input type="text" hidden="true" name="idPay" value="5"/>
            <input type="text" hidden="true" name= "im"value="ak47.avif">

            <input class="inp" type="submit" value="RUSSIA">

         </form>
      </div>
      <div class="c4">
      <form action="un.php" method="POST">
            <input type="text" hidden="true" name="email" value="<?php echo $email;?>"/>
            <input type="text" hidden="true" name="numvi" value="<?php echo $numvi;?>"/>
            <input type="text" hidden="true" name="nom" value="<?php echo $t[2];?>"/>
            <input type="text" hidden="true" name="idPay" value="3"/>
            <input type="text" hidden="true" name= "im"value="hitler.jpg">

            <input class="inp" type="submit" value="GERMANY">

         </form>
      </div>
      <div class="c5">
      <form action="un.php" method="POST">
            <input type="text" hidden="true" name="email" value="<?php echo $email;?>"/>
            <input type="text" hidden="true" name="numvi" value="<?php echo $numvi;?>"/>
            <input type="text" hidden="true" name="nom" value="<?php echo $t[2];?>"/>
            <input type="text" hidden="true" name="idPay" value="4"/>
            <input type="text" hidden="true" name= "im"value="kongfu.jpg">

            <input class="inp" type="submit" value="CHINA">

         </form>
      </div>
      <div class="c6">
      <form action="un.php" method="POST">
            <input type="text" hidden="true" name="email" value="<?php echo $email;?>"/>
            <input type="text" hidden="true" name="numvi" value="<?php echo $numvi;?>"/>
            <input type="text" hidden="true" name="nom" value="<?php echo $t[2];?>"/>
            <input type="text" hidden="true" name="idPay" value="2"/>
            <input type="text" hidden="true" name= "im"value="ice.jpg">
            <input class="inp" type="submit" value="CANADA">

         </form>
      </div>
      <div class="c7">
      <form action="un.php" method="POST">
            <input type="text" hidden="true" name="email" value="<?php echo $email;?>"/>
            <input type="text" hidden="true" name="numvi" value="<?php echo $numvi;?>"/>
            <input type="text" hidden="true" name="nom" value="<?php echo $t[2];?>"/>
            <input type="text" hidden="true" name="idPay" value="7"/>
            <input type="text" hidden="true" name= "im"value="baguette.jpg">
            <input class="inp" type="submit" value="FRANCE">

         </form>
      </div>
      <div class="c8">
      <form action="un.php" method="POST">
            <input type="text" hidden="true" name="email" value="<?php echo $email;?>"/>
            <input type="text" hidden="true" name="numvi" value="<?php echo $numvi;?>"/>
            <input type="text" hidden="true" name="nom" value="<?php echo $t[2];?>"/>
            <input type="text" hidden="true" name="idPay" value="8"/>
            <input type="text" hidden="true" name= "im"value="ninja.jpg">
            <input class="inp" type="submit" value="JAPAN">

         </form>
      </div>
      </div>
   </section>
   <br><br><br>

   <footer>
        this site is  under construction ,
        contact  us for more information  <br>
        © 2024-present, raslen derbali 
    </footer>
</body>
</html>