<?php
require_once '../../front-end/header/header.php';
require_once '../../front-end/header/navbar.php';
require_once '../traitementIntervention/getInterventionInProgress.php';

try {
  $pdoBDresidence = new PDO('mysql:host=localhost:3307;dbname=Residence_isatis;', 'root', '');
  $sql_Get_photo_path = "SELECT `id_tech`, `lieu_tech`, `extention_Photo` FROM `path_image`";

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
  <?php

  foreach ($all_path_photo as $value) {
    # code...

    // her wil need to change the pathe to relative or not but need to change when change files 
    $path_directory_file = '../traitementIntervention/image_intervention_Tech/';

    $path = "$path_directory_file\\$value[id_tech]-$value[lieu_tech].$value[extention_Photo]";

    // echo 'test';

    // echo "<img src='$path'  alt='' width='60' height='60'>";
  }

  ?>


</body>
<table>
  <tr>

    <?php $getAllInterProgress = getAllInterProgress();
    for ($i = 0; $i < count($getAllInterProgress); $i++) {


      if ($getAllInterProgress[$i]['id']) {
        echo "<td>" . $getAllInterProgress[$i]['id'] . "</td>";
      } else {
        echo  "<td>  </td>";
      }
      if ($getAllInterProgress[$i]['dateDemandeIntervention']) {
        echo  "<td>" . $getAllInterProgress[$i]['dateDemandeIntervention'] . "</td>";
      } else {
        echo  "<td>  </td>";
      }
      if ($getAllInterProgress[$i]['postEmployer']) {
        echo  "<td>" . $getAllInterProgress[$i]['postEmployer'] . "</td>";
      } else {
        echo  "<td>  </td>";
      }
      if ($getAllInterProgress[$i]['nature_Intevention']) {
        echo  "<td>" . $getAllInterProgress[$i]['nature_Intevention'] . "</td>";
      } else {
        echo  "<td>  </td>";
      }
      if ($getAllInterProgress[$i]['risque']) {
        echo  "<td>" . $getAllInterProgress[$i]['risque'] . "</td>";
      } else {
        echo  "<td>  </td>";
      }
      if ($getAllInterProgress[$i]['info_statut_app']) {
        echo "<td>" . $getAllInterProgress[$i]['info_statut_app'] . "</td>";
      } else {
        echo  "<td>  </td>";
      }
      if ($getAllInterProgress[$i]['date_intevention']) {
        echo  "<td>" . $getAllInterProgress[$i]['date_intevention'] . "</td>";
      } else {
        echo  "<td>  </td>";
      }
      if ($getAllInterProgress[$i]['remarque_intervention']) {
        echo "<td>" . $getAllInterProgress[$i]['remarque_intervention'] . "</td>";
      } else {
        echo  "<td>  </td>";
      }
      if ($getAllInterProgress[$i]['statut_intervention']) {
        echo  "<td>" . $getAllInterProgress[$i]['statut_intervention'] . "</td>";
      } else {
        echo  "<td>  </td>";
      }
      if ($getAllInterProgress[$i]['directory_img'] !== null) {
        $path = $getAllInterProgress[$i]['directory_img'] . $getAllInterProgress[$i]['id_tech'] . '-' . $getAllInterProgress[$i]['lieu_tech'] . '.' . $getAllInterProgress[$i]['extention_Photo'];
        echo   "<td><img src='$path'  alt='' width='60' height='60'> </td>";
      }
    ?>
    </td>
  </tr>

  <?php
    }  ?>

</table>

</html>