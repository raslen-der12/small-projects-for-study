<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>

<?php


$prod= $_POST["prod"];
$four= $_POST["four"];
$qt= $_POST["qt"];

if($qt==1){
echo "<h1> vous avez commande 1 $prod aupres de $four</h1>";
}else{
	if( $qt==0 or $qt<0){
		echo "<h1> error</h1>";
	}else{
		echo "<h1> vous avez commande $qt $prod"."s aupres de $four</h1>";
		}
		}

		
?>


</body>
</html>