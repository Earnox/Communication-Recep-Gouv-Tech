<?php
require_once '../../front-end/header/header.php';
require_once '../../front-end/header/navbar.php';
try {
  $pdoBDresidence = new PDO('mysql:host=localhost:3307;dbname=Residence_isatis;', 'root', '');
  $sql_Get_photo_path = "SELECT `id_tech`, `lieu_tech` FROM `path_image`";
  $requet_Get_path = $pdoBDresidence->prepare($sql_Get_photo_path);
  if ($requet_Get_path->execute()) {

    // do a funtiion to get the info an then display in a tableau 
    $all_path_photo = $requet_Get_path->fetchAll(PDO::FETCH_ASSOC);
    //   echo $inteventionEnCour['postEmployer'] . ' ' . $inteventionEnCour['lieu'] . ' ' . $inteventionEnCour['nature_Intevention'] . ' ' . $inteventionEnCour['risque'] . ' ' . $inteventionEnCour['info_statut_app'] . ' ' . $inteventionEnCour['statut_intervention'] . '<br> ';

  } else {
    return 'veuillez contacter le support vous avez un probleme lors du script ';
  }
} catch (PDOException $error) {
  echo 'vous avez une erreur lors de la recupération d\'informatior IMAGE veuilliez contacter le support <br>  ' . PHP_EOL;
  file_put_contents('error_Logs_GetAllIntervention.log', 'Probleme insetion BDD' . $error->getMessage() . PHP_EOL, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../front-end/mainpages/css/stylee.css">


<body>
  <header>
    <?php

    echo $title ?>
    <?php
    echo $navbar ?>
  </header>

  <body>
    <?php


    foreach ($all_path_photo as $key => $value) {
      # code...
      var_dump($value);
      $path = "$value[id_tech]-$value[lieu_tech].";
    }

    ?>
  </body>

</html>