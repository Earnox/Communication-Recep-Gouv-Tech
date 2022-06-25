<?php
// funtion to add a new intervention tech
require_once '../application_Gouv_tech/inculde/include.php';
// script.php.

try {

    $nvintervention = new nouvelleInterventionTech();
    var_dump($nvintervention->getIntervention($_POST));
    var_dump($_POST);
    $pdoBDdinterventionEnCour = new PDO('mysql:host=localhost:3307;dbname=interventionTechnique;', 'root', '');
    $newInter = $pdoBDdinterventionEnCour->prepare(
        "INSERT INTO interventionencour( 
    dateDemandeIntervention,
    postEmployer,
    lieu,
    nature_Intevention,
    risque,
    info_statut_app,
    date_intevention,
    remarque_intervention,              
    statut_intervention ) 
    VALUES(  
    :dateDemandeIntervention,
    :postEmployer,
    :lieu, 
    :nature_Intevention,
    :risque,
    :info_statut_app,
    :date_intevention,
    :remarque_intervention,              
    :statut_intervention )
    "
    );

    $newInter->bindValue(':dateDemandeIntervention', $nvintervention->dateDemandeIntervention, PDO::PARAM_STR);
    $newInter->bindValue(':postEmployer', $nvintervention->postEmployer, PDO::PARAM_STR);
    $newInter->bindValue(':lieu', $nvintervention->lieu, PDO::PARAM_STR);
    $newInter->bindValue(':nature_Intevention', $nvintervention->nature_Intevention, PDO::PARAM_STR);
    $newInter->bindValue(':risque', $nvintervention->risque, PDO::PARAM_STR);
    $newInter->bindValue(':date_intevention', $nvintervention->date_intevention, PDO::PARAM_STR);
    $newInter->bindValue(':remarque_intervention', $nvintervention->remarque_intervention, PDO::PARAM_STR);
    $newInter->bindValue(':info_statut_app', $nvintervention->info_statut_app, PDO::PARAM_STR);
    $newInter->bindValue(':statut_intervention', $nvintervention->statut_intervention, PDO::PARAM_STR);
    var_dump($newInter->execute());
    return $newInter->fetchAll();
} catch (PDOException $error) {
    echo 'vous avez une erreur lors de l\'insetion d\'informatior veuilliez contacter le support <br>  ' . PHP_EOL;
    file_put_contents('error_Logs_Instalation.log', 'Probleme insetion BDD' . $error->getMessage() . PHP_EOL, FILE_APPEND);
}