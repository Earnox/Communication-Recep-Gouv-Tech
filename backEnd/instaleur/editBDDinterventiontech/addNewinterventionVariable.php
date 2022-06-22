<?php
// funtion to add a new intervention tech
require_once 'interventionTech.php';
try{
    $nvintervention = new nouvelleInterventionTech();
    $int1 = $nvintervention->lieu ='119';
    $int2 = $nvintervention->nature_Intevention='steven est constiper lui ramneée des médoc';
    $int3 =$nvintervention->risque='sa peux couler';
    $int4 = $nvintervention->info_statut_app='rien';
    $int = $nvintervention->info_statut_app='rien';
    $test ='119';
    $pdoBDdinterventionEnCour = new PDO('mysql:host=localhost:3307;dbname=interventionTechnique;','root','');
var_dump( $nvintervention);
echo '<br>';
var_dump($nvintervention->lieu);
    $newInter = $pdoBDdinterventionEnCour->prepare("INSERT INTO interventionencour( 
   lieu ,
    nature_Intevention,
    risque,
    info_statut_app) 
    VALUES( :lieu,:nature_Intevention,:risque,:info_statut_app)
    ");

    $newInter->bindValue(':lieu',$nvintervention->lieu,PDO::PARAM_STR);
    $newInter->bindValue(':nature_Intevention',  $nvintervention->nature_Intevention,PDO::PARAM_STR);
    $newInter->bindValue(':risque',$nvintervention->risque,PDO::PARAM_STR);
    $newInter->bindValue(':info_statut_app',$nvintervention->info_statut_app,PDO::PARAM_STR);
    var_dump($newInter->execute());
    return $newInter->fetchAll();

}
catch (PDOException $error){
    echo 'vous avez une erreur lors de l\'insetion d\'informatior veuilliez contacter le support <br>  '.PHP_EOL;
    file_put_contents('error_Logs_Instalation.log','Probleme insetion BDD'.$error->getMessage().PHP_EOL,FILE_APPEND);

}
