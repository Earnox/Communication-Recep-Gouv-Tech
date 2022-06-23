<?php
require_once '../header/header.php';
require_once '../header/navbar.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <header>
    <?php

    echo $title ?> <?php

    echo $navbar ?> </header>
  <form action="../../backEnd/traitementIntervention/getNewIntervention.php" method="post">
      <p>post: <input type="text" name="lieu" /></p>
      <p>lieu: <input type="text" name="postEmployer" /></p>
      <p>nature Intevention: <input type="text" name="nature_Intevention" /></p>
      <p>risque: <input type="text" name="risque" /></p>
      <p>dateDemandeIntervention: <input type="date" name="dateDemandeIntervention" /></p>
      <p>date_intevention: <input type="date" name="date_intevention" /></p>
      <p>remarque: <input type="remarque_intervention" name="remarque_intervention" /></p>
      <p>info_statut_app: <input type="text" name="info_statut_app" /></p>
      <p>statut_intervention: <input type="text" name="statut_intervention" /></p>
      <p><input type="submit" value="OK"></p>
  </form>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Welcome to the home page</h1>
      </div>

      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A neque, debitis doloremque ex ipsam
        voluptatibus. Cum est quis, aspernatur eaque perferendis, adipisci at, quisquam similique perspiciatis nobis
        error reiciendis facilis!</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A neque, debitis doloremque ex ipsam
        voluptatibus. Cum est quis, aspernatur eaque perferendis, adipisci at, quisquam similique perspiciatis nobis
        error reiciendis facilis!</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A neque, debitis doloremque ex ipsam
        voluptatibus. Cum est quis, aspernatur eaque perferendis, adipisci at, quisquam similique perspiciatis nobis
        error reiciendis facilis!</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A neque, debitis doloremque ex ipsam
        voluptatibus. Cum est quis, aspernatur eaque perferendis, adipisci at, quisquam similique perspiciatis nobis
        error reiciendis facilis!</p>
      <p>

      </p>

    </div>
  </div>
</body>

</html>