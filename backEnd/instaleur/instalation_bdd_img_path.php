<?php
// creation for bdd intervention tech
try {
  // ici faire une page qui vérifi si la page existe sinon on vien ici 
  $bddresidense = new PDO('mysql:host=localhost:3307;dbname=Residence_isatis;', 'root', '');
  // creation bdd only 3 col -> id unique ,  id of the tech intervention and place where intervention took place
  if ($bddresidense->exec('DROP TABLE IF EXISTS path_Image') !== false) {
    echo 'bdd detruite <br> ' . PHP_EOL;
    if ($bddresidense->exec('CREATE TABLE path_Image (
                id_img INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                img_name Varchar(50),
                id_tech INT,
                lieu_tech VARCHAR(255) ,        
                extention_Photo VARCHAR(255) ,
                directory_img VARCHAR(255)     
            );') !== false) {
      echo 'bdd crée :) <br> ' . PHP_EOL;
    } else {
      echo 'un problème est survenue lors de la création de la bdd <br> ' . PHP_EOL;
    }
  }
  // postEmployer
  //  dateDemandeIntervention
  // date_intevention
  //                remarque_intervention
  //                statut_intervention
} catch (PDOException $erro) {
  echo 'vous avez une erreur a la creation de la bdd image  veuilliez contacter le support <br>  ' . PHP_EOL;
  file_put_contents('error_Logs_Instalation.log', 'Probleme instalation BDD' . $erro->getMessage() . PHP_EOL, FILE_APPEND);
}