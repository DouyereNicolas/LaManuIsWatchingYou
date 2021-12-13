<?php 
session_start();
    $_SESSION["id_user"] = "";
    $_SESSION["lvl_user"] = "";
    $_SESSION["error_connexion"] = "";
    header('Location: ../../index.php');
?>