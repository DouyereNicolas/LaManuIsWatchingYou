<?php
session_start();
include("header.php");
if(!isset($_SESSION["lvl_user"])){
    $_SESSION["lvl_user"] = "";
}

switch($_SESSION["lvl_user"]){
    case "1":
        include("assets/page/popup.php");
        break;
    case "2":
        include("assets/page/accueil_prof.php");
        break;
    default:
        include("assets/page/form_contact.php");
        break;
    };
include("footer.php");

?>