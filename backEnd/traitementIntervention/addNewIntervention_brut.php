<?php
// funtion to add a new intervention tech
require_once '../application_Gouv_tech/inculde/include.php';
try {

    $bddInterventionTech = new PDO('mysql:host=localhost:3307;dbname=interventionTechnique;', 'root', '');
    if ($bddInterventionTech->exec('INSERT INTO interventionencour( postEmployer,
                dateDemandeIntervention,
                lieu ,
                nature_Intevention,
                risque,
                info_statut_app ,
                date_intevention,
                remarque_intervention,
                statut_intervention) VALUES
    ("reception","28-12-05","118","toilette Boucher","","occuper","","","demande intervention")
   ') !== false) {
        echo 'info ajouter ';
    } else {
        echo 'des pb pour ajouter les info ';
    }
} catch (PDOException $error) {
    echo 'vous avez une erreur lors de l\'insetion d\'informatior veuilliez contacter le support <br>  ' . PHP_EOL;
    file_put_contents('error_Logs_Instalation.log', 'Probleme insetion BDD' . $error->getMessage() . PHP_EOL, FILE_APPEND);
}