<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
    <?php
    require_once "includes/session.inc.php";

    extract($_SESSION["list"]);

?>
</head>
<body>
<fieldset >
<legend>Coordonees</legend>
<h4 class="darkgreen" class="sp">Bonjour <?php echo $gen; ?> </h4>
<p class="bestblue sp" >   Vous etes:   <span class="darkgreen"><?php echo $nom." ". $pre; ?></span>  </p>
<p class="bestblue sp" >   Vous etes nes le:   <span class="darkgreen"><?php echo $ddn." a ". $gov; ?></span>  </p>
<p class="bestblue sp" >   Vous habitez a:   <span class="darkgreen"><?php echo $adr." <span class='bestblue'>code postal</span> ". $cdp; ?></span>  </p>
<p class="bestblue sp" >   votre nom d'utilisateur est:   <span class="darkgreen"><?php echo $usn."<span class='bestblue'> votre mot de pass est:</span> ". $mdp; ?></span>  </p>
<p class="bestblue sp" >   Vous avez choisis le domaine:   <span class="darkgreen"><?php echo $dom; ?></span>  </p>

</fieldset>
</body>

</html>


