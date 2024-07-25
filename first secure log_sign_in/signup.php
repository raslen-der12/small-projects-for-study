<?php
require "includes/session.inc.php";
require "includes/signup_view.inc.php";

if (isset($_GET['logout']) && $_GET['logout'] == "true") {
        session_unset();

    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"  />
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="login.php">library</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" >
                <span class="navbar-toggler-icon">library</span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="signup.php">Sign Up</a>

                        </li>
                    </ul>
                </div>

    </header>
<?php 
if ($_SERVER['REQUEST_METHOD']==="GET" ) {
        if (isset($_GET['logout'])) {
            session_destroy();
            session_unset();

    }
    if ((isset($_GET["signup"]) && $_GET["signup"]=== "Success") || isset($_SESSION["user_list"]) ) {
        echo "<div class='alert alert-success' role='alert'>You have successfully signed up!</div>";
        header("refresh:5;url=home.php");
        exit;


    }else{



?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Sign Up <?php  
                         if (isset($_SESSION["errors_signup_model"]) || isset($_SESSION["errors_signup_cntrl"])) {
                            errors();
                        }   ?>
                    </div>
                    <div class="card-body">
                        <form action="includes/signup.inc.php" method="post" >
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">
                                    Name
                                </label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="<?php ErrName()?>" required >
                                        <span class="invalid-feedback" role="alert">
                                        </span>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">
                                    Username
                                </label>
                                    <div class="col-md-6">
                                        <input id="username" type="text" class="form-control" name="username" value="<?php ErrUserName()?>" required >
                                        <span class="invalid-feedback" role="alert">
                                        </span>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">
                                    Email
                                </label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="<?php ErrEmail()?>" required>
                                        <span class="invalid-feedback" role="alert">
                                            </span>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">
                                    Password
                                </label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        <span class="invalid-feedback" role="alert">
                                            </span>
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                                    Confirm Password
                                </label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="pwd" required>
                                    <span class="invalid-feedback" role="alert">
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-user-plus"></i> Sign Up
                                        </button>
                                        <a href="login.php?logout=true" class="btn btn-link">
                                            <i class="fa fa-user"></i> Login
                                        </a>
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