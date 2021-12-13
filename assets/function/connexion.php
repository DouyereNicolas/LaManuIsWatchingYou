<?php
    session_start();
    $dbh = new PDO('mysql:host=localhost;dbname=manuiswatchingyou', "root", "");
    $login = $_POST["login"];
    $password = $_POST["password"];

    $sqlQuery = 'SELECT * FROM utilisateur WHERE login = "'.$login.'" AND password = "'.$password.'"';
    $recipesStatement = $dbh->prepare($sqlQuery);
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();

    if($recipes != ""){
        
        foreach ($recipes as $recipe) {
            $_SESSION["id_user"] = $recipe['id_user'];
            $_SESSION["lvl_user"] = $recipe['lvl_user'];
        }
        echo $_SESSION["lvl_user"];
        if($_SESSION["lvl_user"] == 2){
            $sqlQuery = 'SELECT * FROM professor WHERE id_user="'.$_SESSION["id_user"].'"';
            $recipesStatement = $dbh->prepare($sqlQuery);
            $recipesStatement->execute();
            $recipes = $recipesStatement->fetchAll();
            foreach ($recipes as $recipe) {
                $_SESSION["id_professor"] = $recipe['id_professor'];
            }
        }else{
            $utilisateur = 'SELECT * FROM student WHERE id_user = "'.$_SESSION["id_user"].'"';
            foreach ($recipes as $recipe) {
                $_SESSION["id_student"] = $recipe['id_student'];
            }
        }
        header('Location: ../../index.php');
    }else{
        $_SESSION["error_connexion"] = "Le login et/ou le mot de passe n'est pas correct";
        header('Location: ../../index.php');
    }
?>