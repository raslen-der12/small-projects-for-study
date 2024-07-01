<?php
extract($_POST);



$cnx= mysqli_connect("127.0.0.1","root","","bank") or die("error cnx");
$req="select * from compte where numCmt= $numc;";
$res=mysqli_query($cnx,$req) or die("prob in req");
if (mysqli_num_rows($res) == 0) {
    echo "compte non existan";
}else{
$r=mysqli_fetch_array($res1);
if ($r[2]=="epargne" && $typtran == "retirement") {
    if($mon>$r[4]){
        echo"transaction rejetee";
    }else{
        $d= date("Y-m-d");
        $req1="insert into transaction values('','$numc','$mon','$d','$typtran');";
        $res1=mysqli_query($cnx,$req1)or die("prob");
    }
}
}
?>