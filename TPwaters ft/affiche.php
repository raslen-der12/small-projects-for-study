<link rel="stylesheet" href="style.css">
<?php
require("config.php");

$req="select day(date),month(date),year(date), heure,l.nom,ville,pays,c.nom ,capacite
        from lieu l , concert c 
        where c.idLieu = l.idLieu 
        and date>now() 
        and( nbsol <> 0 or nbloge<>0 or nbTribune <> 0);";
$res=mysqli_query($cnx,$req) or die("error sql");
echo "
    <table>
        <tr>
            <th>
                date de concert
            </th>
            <th>
                lieu du concert 
            </th>
        </tr>";
     
        while ($r=mysqli_fetch_array($res)){
            $r[3]=substr($r[3],0,5);
            $datSys=date("Y-m-d");
            
            $datCon=$r[2].$r[1].$r[0];
            $datSys=strtotime($datSys);
            $sec=$datCon-$datSys;
            $j = $sec /(3600 *24);
            echo "<tr>
                    <td>
                    <span class='date'>$r[0] $r[1]</span> <br>  <span class='jour'>$r[3]</span>  <br> $r[2] 
                    </td>
                    <td>
                        $r[4] , <span class='lieu'>$r[5] ,$r[6]</span>,<br>  $r[7]<br><span class='cap'> capacite d'accuil : $r[8]</span>
                    </td>
                    <td>
                     dat fin $j
                    </td>
                    </tr>
             ";
        }
        $req2="select avg(capacite) from lieu ";
        $t=mysqli_fetch_array(mysqli_query($cnx,$req2));
        $p=round($t[0]);
        echo " 
      </table>
      <mark>capaicte moyene:</mark> $p personnes
       ";


?>