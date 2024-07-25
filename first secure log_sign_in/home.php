<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"  />
    <title>Document</title>
</head>
<body>
    <?php
    require_once "includes/session.inc.php";
    if (!isset($_SESSION["user_list"])) {
        header("Location:login.php");
        exit;
    } 
     ?>
    <h1 align="center" > <img src="images/soon.png" alt="coming soon"> <br>
    <!-- make a link disconnect -->
     <a href="disconnect.php"  class="btn btn-outline-info" >Disconnect</a>
    
</body>
</html>