<?php
    session_start();
    $_SESSION["id_student"] = 1;
    $dbh = new PDO('mysql:host=localhost;dbname=manuiswatchingyou', "root", "");
    $date = Date("Y-m-d H:i:s");
    $sqlQuery = "INSERT INTO event (activity,date_event,id_student) VALUES (1,'".$date."',".$_SESSION["id_student"].")";
    echo $sqlQuery;
    $recipesStatement = $dbh->prepare($sqlQuery);
    $recipesStatement->execute();
?>