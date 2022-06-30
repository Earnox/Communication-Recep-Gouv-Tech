<?php
// creation for bdd intervention tech
try {
    $pdo = new PDO('mysql:host=localhost:3307;', 'root', '');
    // ici faire une page qui vérifi si la page existe sinon on vien ici 
    if ($pdo->exec('DROP DATABASE IF EXISTS Residence_isatis') !== false) {
        echo 'bdd detruite <br> ' . PHP_EOL;
        if ($pdo->exec('CREATE DATABASE Residence_isatis') !== false) {
            echo 'creation de la bdd reussi <br>  ' . PHP_EOL;

            $bddInterventionTech = new PDO('mysql:host=localhost:3307;dbname=Residence_isatis;', 'root', '');

            if ($bddInterventionTech->exec('CREATE TABLE interventionEnCOur (
               id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                dateDemandeIntervention DATE,
                postEmployer VARCHAR(255),
                lieu VARCHAR(255),
                nature_Intevention VARCHAR(255),
                risque VARCHAR(255),
                info_statut_app VARCHAR(255),
                date_intevention DATE,
                remarque_intervention VARCHAR(255),
                statut_intervention VARCHAR(255)             
            --    img VARCHAR(500) ensuite lie limage directement dans src dans les balise 

            );') !== false) {
                echo 'bdd crée :) <br> ' . PHP_EOL;
            } else {
                echo 'un problème est survenue lors de la création de la bdd <br> ' . PHP_EOL;
            }
        }
    }
}
// postEmployer
//  dateDemandeIntervention
// date_intevention
//                remarque_intervention
//                statut_intervention

catch (PDOException $erro) {
    echo 'vous avez une erreur a la creation de la bdd Intevention Tech  veuilliez contacter le support <br>  ' . PHP_EOL;
    file_put_contents('error_Logs_Instalation.log', 'Probleme instalation BDD' . $erro->getMessage() . PHP_EOL, FILE_APPEND);
}