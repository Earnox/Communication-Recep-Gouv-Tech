<?php


function getAllInterProgress()
{

  // id 
  // $dateDemandeIntervention;
  // $postEmployer;
  // $lieu;
  // $nature_Intevention;
  // $risque;
  // $info_statut_app;
  // $date_intevention;
  // $remarque_intervention;
  // $statut_intervention;
  try {
    $pdoBDdinterventionEnCour = new PDO('mysql:host=localhost:3307;dbname=Residence_isatis;', 'root', '');
    $sqlGetInterventionProgress = "
  SELECT interventionencour.* ,path_image.* FROM interventionencour LEFT JOIN path_image ON id = path_image.id_tech; ";
    $requetGetAllInt = $pdoBDdinterventionEnCour->prepare($sqlGetInterventionProgress);
    if ($requetGetAllInt->execute()) {

      // do a funtiion to get the info an then display in a tableau 
      $inteventionEnCour = $requetGetAllInt->fetchAll(PDO::FETCH_ASSOC);
      //   echo $inteventionEnCour['postEmployer'] . ' ' . $inteventionEnCour['lieu'] . ' ' . $inteventionEnCour['nature_Intevention'] . ' ' . $inteventionEnCour['risque'] . ' ' . $inteventionEnCour['info_statut_app'] . ' ' . $inteventionEnCour['statut_intervention'] . '<br> ';
      return $inteventionEnCour;
    } else {
      return 'veuillez contacter le support vous avez un probleme lors du script ';
    }
  } catch (PDOException $error) {
    echo 'vous avez une erreur lors de la recupération d\'informatior veuilliez contacter le support <br>  ' . PHP_EOL;
    file_put_contents('error_Logs_GetAllIntervention.log', 'Probleme insetion BDD' . $error->getMessage() . PHP_EOL, FILE_APPEND);
  }
}