<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"  />
    <link rel="stylesheet" href="styles/style.css">

    <title>Document</title>
</head>
<body>
    <?php
    require "includes/session.inc.php";
    require "includes/login_view.inc.php";


 

    
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="login.php">library</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" >
                <span class="navbar-toggler-icon">library</span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="login.php">Log In</a>

                        </li>
                    </ul>
                </div>

    </header>
    <?php 

if ($_SERVER['REQUEST_METHOD']==="GET" ) {

    if (isset($_GET['logout']) && $_GET['logout'] == "true") {
        session_unset();

    }

    if ((isset($_GET["login"]) && $_GET["login"]=== "Success") || isset($_SESSION["user_list"]) ) {
        echo "<div class='alert alert-success' role='alert'>You have successfully loged in!</div>";
        header("refresh:5;url=home.php");
        exit;


    }else{



?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Login <?php if (isset($_SESSION["errors_login_model"]) || isset($_SESSION["errors_login_cntrl"])) {
                            errorss();
                        }   ?>
                    </div>
                    <div class="card-body">
                        <form method="post" action="includes/login.inc.php">
                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right"> username</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="user" value="<?php ErrUser() ?>" required autocomplete="email" autofocus>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">
                                    Password</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                                    </div>
                            </div>
                            
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">

                                    <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Login</button>
                                     <a class="btn btn-link" href="signup.php?logout=true"><i class="fa fa-user-plus"></i> Sign Up</a>
                                     
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

                                                    
<?php }
} ?>                                                                   
                    
</body>
</html>