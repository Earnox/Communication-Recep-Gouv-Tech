<?php
require_once '../all_Include/include.php';


try {
  var_dump($_POST);
  // $nvintervention = new nouvelleInterventionTech();
  // var_dump($nvintervention->getIntervention($_POST));
  $pdoBDdinterventionEnCour = new PDO('mysql:host=localhost:3307;dbname=Residence_isatis;', 'root', '');

  $sql = "UPDATE interventionencour SET 
  dateDemandeIntervention = :dateDemandeIntervention,
    postEmployer = :postEmployer ,
    lieu = :lieu ,
    nature_Intevention = :nature_Intevention ,
    risque = :risque ,
    info_statut_app = :info_statut_app ,
    date_intevention = :date_intevention ,
    remarque_intervention = :remarque_intervention ,              
    statut_intervention = :statut_intervention
    WHERE id = :id
    ";
  $edit_intervention = $pdoBDdinterventionEnCour->prepare($sql);
  $edit_intervention->bindValue(':id', 1, PDO::PARAM_INT);
  $edit_intervention->bindValue(':dateDemandeIntervention', $nvintervention->dateDemandeIntervention, PDO::PARAM_STR);
  $edit_intervention->bindValue(':postEmployer', $nvintervention->postEmployer, PDO::PARAM_STR);
  $edit_intervention->bindValue(':lieu', $nvintervention->lieu, PDO::PARAM_STR);
  $edit_intervention->bindValue(':nature_Intevention', $nvintervention->nature_Intevention, PDO::PARAM_STR);
  $edit_intervention->bindValue(':risque', $nvintervention->risque, PDO::PARAM_STR);
  $edit_intervention->bindValue(':date_intevention', $nvintervention->date_intevention, PDO::PARAM_STR);
  $edit_intervention->bindValue(':remarque_intervention', $nvintervention->remarque_intervention, PDO::PARAM_STR);
  $edit_intervention->bindValue(':info_statut_app', $nvintervention->info_statut_app, PDO::PARAM_STR);
  $edit_intervention->bindValue(':statut_intervention', $nvintervention->statut_intervention, PDO::PARAM_STR);
  $edit_intervention->execute();
} catch (PDOException $error) {
  echo 'vous avez une erreur lors de la recupération d\'informatior veuilliez contacter le support <br>  ' . PHP_EOL;
  file_put_contents('error_Logs_GetAllIntervention.log', 'Probleme insetion BDD' . $error->getMessage() . PHP_EOL, FILE_APPEND);
}