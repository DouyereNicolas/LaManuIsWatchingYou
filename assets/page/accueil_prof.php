<?php 

    $dbh = new PDO('mysql:host=localhost;dbname=manuiswatchingyou', "root", "");
    $sqlQuery = "SELECT * FROM promo WHERE id_professor = ".$_SESSION["id_professor"];
    $recipesStatement = $dbh->prepare($sqlQuery);
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
    ?>
    <div class="container">
    <?php
    foreach ($recipes as $promo){
        $sqlStudent = 'SELECT * FROM student WHERE id_promo ="'.$promo["id_promo"].'"';
        $recipesStatement2 = $dbh->prepare($sqlStudent);
        $recipesStatement2->execute();
        $recipes2 = $recipesStatement2->fetchAll();
        ?>
        <div class="containerProf">
        <div  onclick="showMsg()">
            <h1><?=$promo["name"]?></h1>
           
            <div style="display:none;" id="student">
            <?php foreach ($recipes2 as $student){ ?>
                <p><?=$student["name_student"]?><span class="ms-2"><?=$student["surname_student"]?></span><span class="ms-4" id="inactif">OK</span></p>
            <?php } ?>
            </div>
            </div>
        </div>
        <?php
    }
    
?></div>

<script>

function showMsg(){
   document.getElementById("student").style.display = "block";
}
</script>