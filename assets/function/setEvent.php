<?php
    session_start();
    $dbh = new PDO('mysql:host=localhost;dbname=manuiswatchingyou', "root", "");
    $today = date("Y-m-d H:i:s");
    $dateTime = new DateTime($today,new DateTimeZone('Europe/Paris'));
    $dateTime->modify('+60 minutes');
    $date = $dateTime->format("Y-m-d H:i:s");
    $sqlQuery = "INSERT INTO event (activity,date_event,id_student) VALUES (1,'".$date."',".$_SESSION["id_student"].")";
    echo $sqlQuery;
    $recipesStatement = $dbh->prepare($sqlQuery);
    $recipesStatement->execute();
?>