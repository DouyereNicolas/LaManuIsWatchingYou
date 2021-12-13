    <h1 class="titleMenu"><span class="laManu">LA MANU</span><br>IS WATCHING YOU</h1>
<?php 
    $dbh = new PDO('mysql:host=localhost;dbname=manuiswatchingyou', "root", "");
    $sqlQuery = "SELECT * FROM promo WHERE id_professor = ".$_SESSION["id_professor"];
    $recipesStatement = $dbh->prepare($sqlQuery);
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();
    $today = date("Y-m-d H:i:s");
    $dateTime = new DateTime($today,new DateTimeZone('Europe/Paris'));
    $dateTime->modify('+61 minutes');
    $dateEnd = $dateTime->format("Y-m-d H:i:s");
   
    $dateTime = new DateTime($today);
    $dateTime->modify('+60 minutes');
    $dateTime->modify('-1 minutes');
    $dateStart = $dateTime->format("Y-m-d H:i:s");
    
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
        <div  class="promo" >
            <h1><?=$promo["name"]?></h1>
           
            <div id="student_<?= $promo["id_promo"]?>">
            <?php foreach ($recipes2 as $student){
                $request = "SELECT * FROM event WHERE id_student = ".$student["id_student"]." AND `date_event` BETWEEN '".$dateStart."' AND '".$dateEnd."'";
                
                $recipesStatement3 = $dbh->prepare($request);
                $recipesStatement3->execute();
                $recipes3 = $recipesStatement3->fetchAll();
                ?>
                
                <p id="st_<?=$student["id_student"]?>"><?=$student["name_student"]?><span class="ms-2"><?=$student["surname_student"]?></span><span class="ms-4" id="inactif"><?php 
                    if($recipes3 == []){
                        echo "OK";
                    }
                    else{
                        echo "INACTIF";
                    }
                ?></span></p>
            <?php } ?>
            </div>
            </div>
        </div>
        <?php
    }
?></div>

<script>
function recharge(){
    window.location.reload();
}

setInterval(recharge, 5000);
</script>