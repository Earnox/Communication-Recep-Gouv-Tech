<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="../../backEnd/traitement_IMG/traitement_img.php" method="post" class="form-inter"
    enctype="multipart/form-data">
    <p>ID: <input type="int" name="id" />2</p>

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
</body>

</html>