<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bo">

    <script src="test.js"></script>
    
<header class='heed'>
      <div class="of">
      <img  src="profile.png"  onclick="ver()" width=90 alt="your account">
      <div class="profile" style="display:none;">
         <?php
         
         extract($_POST);
         $cnx= mysqli_connect("localhost","root","","newproject") or die("prob in connection");
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
         if (mysqli_num_rows($res)==0) {
            echo "<h1 class='hh11'>you don't have any travel yet!</h1>";
         }else{
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
    <?php
    require( 'config.php');
    $req1="select * from pays  where idPays='$idPay' ";
    $res2=mysqli_query($cnx,$req1) ;
    $t2=mysqli_fetch_array($res2);
    ?>
    <h1 class="h1b"> you want to go to <?php echo "$t[0]"?></h1>
    <article>
    <h2 class="h2"> you have to konw this </h2>
    <div class="griyed">
    <p><?php echo "$t2[1]"?> does not accept all types of travelers for exemple this ccountry do not accept peopel arrived for <?php echo "$t2[2]";?> and the official language of this country is <?php echo "$t2[3]";?>, please respect the laws and guidelines when applying for a visa</p>
    <img src="<?php echo"$im";?>" width=600 >
    </div>
    </article>
    <h1 class="h1b"> get your visa</h1>
    <article class="for">
    <form method="post" action="valid.php">
        <table class="table">
            <tr>
                <td class='td'> <input type="text" name="idCli" hidden=true value = "<?php echo "$numvi";?>"></td>
            </tr>
            <tr>
                <td class='td'> <input type="text" hidden="true"name="idPay" value="<?php echo "$idPay";?>"></td>
            </tr>
            <tr>
                <td class='td'> what's the raison of your  visit ? : </td>
                <td class='td'> <select class="selec" name="accept" require>
                    <option value="">enter  a reason</option>
                    <option value="work">work</option>
                    <option value="tourist">tourist</option>
                    <option value="sickness">sickness</option>
                    <option value="study">study</option>
                    <option value="bizness">bizness</option>
                    <option value="living">living</option>
                </select></td>
            </tr>
            <tr>
                <td class='td'>when do you want to go?</td>
                <td class='td'> <input type="date" class="inpu" name="datdb" required></td>
            </tr>
            <tr>
                <td class='td'><input type="reset" class= "but"></td>
                <td class='td'><input type="submit" class="but" value="take your visa "></td>
            </tr>
        </table>
    </form>
    </article>
    <br><br><br>

    </section>
    <footer>
        this site is  under construction ,
        contact  us for more information  <br/>
        © 2024-present, raslen derbali 
    </footer>
</body>
</html>