<?php
// funtion to add a new intervention tech
require_once 'interventionTech.php';
try{
$nvintervention = new nouvelleInterventionTech();
    $nvintervention->lieu ='119';
    $nvintervention->nature_Intevention='steven est constiper lui ramneée des médoc';
   $nvintervention->risque='sa peux couler';
    $nvintervention->info_statut_app='rien';
    $bddInterventionTech = new PDO('mysql:host=localhost:3307;dbname=interventionTechnique;','root','');
//    if($bddInterventionTech->exec('INSERT INTO interventionencour( postEmployer,
//                dateDemandeIntervention,
//                lieu ,
//                nature_Intevention,
//                risque,
//                info_statut_app ,
//                date_intevention,
//                remarque_intervention,
//                statut_intervention) VALUES
//    ("reception","28-12-05","118","toilette Boucher","","occuper","","","demande intervention")
//   ') !== false)
//$statement = $pdo->prepare(“SELECT * FROM users WHERE `username`=:username AND
//6
//  ` pass`=:pass”);
   $newInter = $bddInterventionTech->prepare("INSERT INTO interventionencour( 
 lieu ,
nature_Intevention,
risque,
info_statut_app) 
VALUES( ':lieu',':nature_Intevention',':risque',':info_statut_app')");
    $newInter->bindValue(':lieu',$nvintervention->lieu,PDO::PARAM_STR);
    $newInter->bindValue(':nature_Intevention',  $nvintervention->nature_Intevention,PDO::PARAM_STR);
    $newInter->bindValue(':risque',$nvintervention->risque,PDO::PARAM_STR);
    $newInter->bindValue(':info_statut_app',$nvintervention->info_statut_app,PDO::PARAM_STR);
    $newInter->execute();
//    {
//        echo 'info ajouter ';
//
//    }
//    else{
//        echo 'des pb pour ajouter les info ';
//    }
}
catch (PDOException $error){
        echo 'vous avez une erreur lors de l\'insetion d\'informatior veuilliez contacter le support <br>  '.PHP_EOL;
        file_put_contents('error_Logs_Instalation.log','Probleme insetion BDD'.$error->getMessage().PHP_EOL,FILE_APPEND);

}
