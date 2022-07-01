<?php
require_once '../header/header.php';
require_once '../header/navbar.php';
require_once '../../backEnd/traitementIntervention/getInterventionInProgress.php';


?>
<!DOCTYPE html>
<html lang="fr">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/stylee.css">
</head>

<body>
  <header>
    <?php

    echo $title ?>
    <?php
    echo $navbar ?>
  </header>
  <!-- importante to name the all the name ass ritine her for the function  -->
  <form action="../../backEnd/traitementIntervention/getNewIntervention.php" method="post" class="form-inter"
    enctype="multipart/form-data">
    <p>dateDemandeIntervention: <input type="date" name="dateDemandeIntervention" /></p>
    <p>post: <input type="text" name="postEmployer" /></p>
    <p>lieu: <input type="text" name="lieu" /></p>
    <p>nature Intevention: <input type="text" name="nature_Intevention" /></p>
    <p>risque: <input type="text" name="risque" /></p>
    <p>info_statut_app: <input type="text" name="info_statut_app" /></p>
    <p>date_intevention: <input type="date" name="date_intevention" /></p>
    <p>remarque: <input type="text" name="remarque_intervention" /></p>
    <p>statut_intervention: <input type="text" name="statut_intervention" /></p>

    <input type="file" id="photo_intervention" name="photo_intervention" accept="image/png, image/jpeg">

    <p><input type="submit" value="OK"></p>
  </form>
  <main>
    <table>
      <?php getAllInterProgress();
      ?>

      <thead>
        <tr>
          <th>Id</th>
          <th>Date</th>
          <th>Poste</th>
          <th>Appartement</th>
          <th>Nature de l'intervention</th>
          <th>Risque</th>
          <th>info Menage</th>
          <th>Date de réalisation</th>
          <th>Remarques</th>
          <th>Statut</th>
          <th>Photo</th>
          <th>Edite</th>
        </tr>
      </thead>
      <tbody>
        <?php $getAllInterProgress = getAllInterProgress();
        foreach ($getAllInterProgress as $inters) {
        ?>
        <tr>
          <?php
            foreach ($inters as $key => $value) {
            ?>

          <td>
            <?php echo $value ?>
          </td>
          <?php
            }
            ?>
          <td>
            <form action="../../backEnd/traitementIntervention/edit_Intervention.php">
              <button type="submit" method="post" class="form-inter"> edit</button>
            </form>
          </td>

          <td>
            <!-- <input type="photo" id="photo_intervention" name="photo_intervention" accept="image/png, image/jpeg"> -->

          </td>
        <tr>
          <?php
        } ?>
        </tr>

      </tbody>
    </table>
</body>

</html>