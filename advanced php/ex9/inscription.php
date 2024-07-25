


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <?php
            require_once "includes/session.inc.php";

            $list=["Errnom"=>"","Errpre"=>"","Errddn"=>"","Errgen"=>"","Errcdp"=>"","Errpwd"=>""];
            if ($_SERVER["REQUEST_METHOD"]==="POST") {

                require_once "./includes/cntrl.inc.php";
                verif();
                
            }?>
</head>
<body>


    <form method="post">
        <fieldset>
            <legend>Coordonees</legend>
            <?php if (isset($_SESSION["vide"])) {
                echo $_SESSION["vide"];
                unset($_SESSION["vide"]);
            } ?>
            <div class=" div">
                <div class="di">
                <label for="nom">Nom <?php if (isset($_SESSION["Err"]["Errnom"])) {
                                                        echo $_SESSION["Err"]["Errnom"];
                                                        unset($_SESSION["Err"]["Errnom"]);
                }  ?></label>
                    <input type="text" name="nom" value="<?php  if (isset($_POST["nom"])) {
                        echo $_POST["nom"];
                    } ?>">
                    </div>
                    <div class="di">
                        
                <label for="pre">Prenom <?php  if (isset($_SESSION["Err"]["Errpre"])) {
                                                        echo "<span class='red'>". $_SESSION["Err"]["Errpre"]."</span>";
                                                        unset($_SESSION["Err"]["Errpre"]);
                }  ?> </label>
                    <input type="text" name="pre" value="<?php  if (isset($_POST["pre"])) {
                        echo $_POST["pre"];
                    } ?>">
                    </div>
                    <div class="di">
                <label for="ddn">Date de naissance <?php if (isset($_SESSION["Err"]["Errddn"])) {
                                                        echo "<span class='red'>". $_SESSION["Err"]["Errddn"]."</span>";
                                                        unset($_SESSION["Err"]["Errddn"]);
                }  ?> </label>
                    <input type="date" name="ddn" value="<?php  if (isset($_POST["ddn"])) {
                        echo $_POST["ddn"];
                    } ?>">
                    </div>
            </div>
            <div class=" div">
                <div class="di">
                <label for="gen">Genre </label>
                    <input type="Radio" name="gen" value="H" <?php if (isset($_POST["gen"])) {
                        if ($_POST["gen"]=="H") {
                            echo "checked";
                            }
                    } ?>>Homme

                    <input type="Radio" name="gen" value="F"<?php if (isset($_POST["gen"])) {
                        if ($_POST["gen"]=="F") {
                            echo "checked";
                            }
                    } ?> >Femme
                    </div><div>
                <label for="gov">Gouvernorat</label>
                    <select name="gov" id="gov">
                        <option value="">Choisir le gouvernorat</option>
                        <option value="Ariana">Ariana</option>
                        <option value="Beja">Bizerte</option>
                        <option value="Ben Arous">Ben Arous</option>
                        <option value="Bizerte">Bizerte</option>
                        <option value="Gabes">Gabes</option>
                        <option value="Gafsa">Gafsa</option>
                        <option value="Jendouba">Jendouba</option>
                        <option value="Kairouan">Kairouan</option>
                        <option value="Kasserine">Kasserine</option>
                        <option value="Kebili">Kebili</option>
                        <option value="Kef">Kef</option>
                        <option value="Mahdia">Mahdia</option>
                        <option value="Manouba">Manouba</option>
                        <option value="Medenine">Medenine</option>
                        <option value="Monastir">Monastir</option>
                        <option value="Nabeul">Nabeul</option>
                        <option value="Sfax">Sfax</option>
                        <option value="Sidi Bouzid">Sidi Bouzid</option>
                        <option value="Siliana">Siliana</option>
                        <option value="Sousse">Sousse</option>
                        <option value="Tataouine">Tataouine</option>
                        <option value="Tozeur">Tozeur</option>
                        <option value="Tunis">Tunis</option>
                        <option value="Zaghouan">Zaghouan</option>
                    </select>
                    </div><div class="di">
                <label for="cdp">Code postal <?php if (isset($_SESSION["Err"]["Errcdp"])) {
                                                        echo "<span class='red'>". $_SESSION["Err"]["Errcdp"]."</span>";
                                                        unset($_SESSION["Err"]["Errcdp"]);
                }  ?>  </label>
                    <input type="text" name="cdp"  value="<?php  if (isset($_POST["cdp"])) {
                        echo $_POST["cdp"];
                    } ?>">
                    </div>
            </div>
            <div class=" div d">
                <div class="di">
                <label for="adr">Address</label>
                    <input type="text" name="adr" class="adr" value="<?php  if (isset($_POST["adr"])) {
                        echo $_POST["adr"];
                    } ?>">
                    </div>
            </div>
            <div class=" div">
                <div class="di">
                <label for="usn">Nom d'utilisateur</label>
                    <input type="text" name="usn" value="<?php  if (isset($_POST["usn"])) {
                        echo $_POST["usn"];
                    } ?>">
                    </div>
                    <div class="di">
                <label for="pwd">Mot de passe</label>
                    <input type="password" name="mdp">
                    </div>
                    <div class="di">
                <label for="rpw">Reecrire mot de passe <?php if (isset($_SESSION["Err"]["Errpwd"])) {
                                                        echo "<span class='red'>". $_SESSION["Err"]["Errpwd"]."</span>";
                                                        unset($_SESSION["Err"]["Errpwd"]);
                }  ?></label>
                    <input type="password" name="rpw" >
                    </div>
            </div>
            <div class=" div dd">
                <div class="di">
                <label for="dom">Domaine</label>
                    <select name="dom">
                        <option value="">Choisir le domaine</option>
                        <option value="marketing">marketing</option>
                        <option value="informatique">informatique</option>
                        <option value="designe">designe</option>
                        <option value="edit">edit</option>

                    </select>
                    </div><div class="di">
                <label for="atd">Autres domaines</label>
                    <input type="text" name="atd" class="adr" value="<?php  if (isset($_POST["atd"])) {
                        echo $_POST["atd"];
                    } ?>">
                    </div>
            </div>
            <div class="div6 ">
                <input type="reset" value="reset">
                <input type="submit" value="submit" name="submit">
            </div>

        </fieldset>
    </form>
    <?php session_unset(); ?>
</body>
</html>