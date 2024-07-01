<?php

extract($_POST);

echo "
<link  rel='stylesheet' href='style.css'>
";


require("config.php");

$req="SELECT unaccepts from pays where idPays='$idPay';";
$res=mysqli_query($cnx,$req); 
$t=mysqli_fetch_array($res);

$req4="SELECT nomP from pays p , client c where c.idPays = p.idPays and c.idCli = '$idCli' ; ";
$res4= mysqli_query( $cnx , $req4) or die ('Erreur SQL<br>' . mysqli_error());
$t4=mysqli_fetch_array($res4);
$req3= "SELECT nomCli from client where idCli = '$idCli'; ";
$res3= mysqli_query($cnx, $req3) or die("ppp");
$n=mysqli_fetch_array($res3) ;
$nom= $n['nomCli'];
if ($t[0]== $accept) {
    echo "<style> h1{text-align: center; color:red;} </style><h1>your visa command are rejected because the reasen </h1>";
} else {
    if ($datdb < date("Y-m-d")) {
        echo "<style> a,h1{text-align: center; color:red;} </style><h1>your visa command are rejected because the date</h1> ";

    } else {
        $req2="SELECT datend from visa  where idCli='$idCli';";
        $res2=mysqli_query($cnx,$req2);
        $ok =true;

        while ($t1=mysqli_fetch_array($res2)) {
                $dat = strtotime(date("Y-m-d"));
                $dat1 = strtotime($t1[0]);
                if ($dat1 > $dat) {
                        $ok=false;
                }
        }
        
        if ($ok == false) {
            echo "<div class='divc'><h1 class='h11'>you are already have a visa </h1></div>";

        }else{
            if ($accept == "work") {

                $dat = strtotime($datdb);
                $mon=date("m",$dat);
                $day=date("d",$dat);
                $y=date("Y",$dat)+3;
                $datfin=$y."-".$mon."-" .$day;
                } else {
                    if ($accept == "tourist") {
    
                        $dat = strtotime($datdb);
                        $day=date("d",$dat);
                        $mon=date('m',strtotime("+3 months", $dat)); 
                        $y=date('Y',strtotime("+3 months", $dat)); 
                        $datfin=$y."-".$mon."-" .$day;
                        $datfin=date($datfin);
                    }else{
                        if ($accept == "sickness") {
                            $dat = strtotime($datdb);
                            $day=date("d",$dat);
                            $mon=date('m',strtotime("+1 month", $dat)); 
                            $y=date('Y',strtotime("+1 month", $dat)); 
                            $datfin=$y."-".$mon."-" .$day;
                            $datfin=date($datfin);
                        }else{
                            if ($accept == "study") {
                                $dat = strtotime($datdb);
                                $mon=date("m",$dat);
                                $day=date("d",$dat);
                                $y=date("Y",$dat)+4;
                                $datfin=$y."-".$mon."-" .$day;
                                $datfin=date($datfin);
                            }else{
                                if ($accept == "bizness") {
                                    $dat = strtotime($datdb);
                                    $day=date('d',strtotime("+7 days", $dat)); 
                                    $mon=date('m',strtotime("+7 days", $dat)); 
                                    $y=date('Y',strtotime("+7 days", $dat)); 

                                    $datfin=$y."-".$mon."-" .$day;
                                    $datfin=date($datfin);
                                }else{
                                    $dat = strtotime($datdb);
                                    $mon=date("m",$dat);
                                    $day=date("d",$dat);
                                    $y=date("Y",$dat)+40;
                                    $datfin=$y."-".$mon."-" .$day;
                                    $datfin=date($datfin);
                                }
                            }
                        }
                    }
                }
                $req6="SELECT capacity from pays where idPays='$idPay';";
                $res6=mysqli_query($cnx,$req6);
                $t3=mysqli_fetch_array($res6)['capacity'];
                if ($t3 == 0) {
                    echo "<div class='divc'><h1 class='h11'>your visa command are rejected because  the country you want to visit is full for this period</h1></div>";
                }else{



            $req1="INSERT into  visa values('','$idCli','$idPay','$accept','$datdb','$datfin');";
            $req5="UPDATE pays SET capacity = capacity-1 WHERE idPays = $idPay ; ";
            $res5=mysqli_query($cnx,$req5) or die ("Error");
            $res1=mysqli_query($cnx,$req1) or die ("Erreur d'enregistrement de req1");
            $r=mysqli_affected_rows($cnx);
            if ($r == 0) {
                echo "Nah i'd win <img src='gojo.jpg' width = 600> <br> Nah i can't win <img src='go-jo.jpg'> ";
            }else{
                echo"
                <head>
                    <link rel='stylesheet' href='style.css'>
                </head>
                <body class='bo'>
                    <h2>this is your visa </h2> 
                    <section class='sec12'>
                        <div class='pro'>
                            <h3 class='h33'>$nom</h3>
                            <br>
                            <br>
                        </div>
                        <div class= 'ident'>
                            <p> your passport id :  $idCli</p>
                            <p> your country  :$t4[0] </p>
                            <p> start validity  :$datdb </p>
                            <p> end validity :$datfin</p>
                        </div>

                    </section>   


                </body>
                
                
                ";
            }

            }

            
        }
    }
}    

?>

