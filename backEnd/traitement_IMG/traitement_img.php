<?php
require_once 'C:\xampp\htdocs\application_Gouv_tech\backEnd\all_Include\include.php';
function renamephoto($new_id, $photo, $post)
{
  // here funtion to get the info of in img to put extension 
  $fileInfo = pathinfo($photo['photo_intervention']['name']);

  return $new_id . "-" . $post['lieu'] . '.' . $fileInfo['extension'];
}
function traitement_img($new_id, $FILES, $POST)
{
  // here change the path were wil be save the photo 
  $directory = '../traitementIntervention/image_intervention_Tech/';
  if (!is_dir($directory)) {

    mkdir($directory, 0777);
  }
  $extensions = array('jpg', 'png', 'gif');
  if (isset($FILES['photo_intervention']) && !$FILES['photo_intervention']['error']) {
    $fileInfo = pathinfo($FILES['photo_intervention']['name']);

    if ($FILES['photo_intervention']['size'] <= 2000000) {

      if (in_array($fileInfo['extension'], $extensions)) {
        // Scripts à exécuter quand les contrôles sont bons. 



        $photo_name = renamephoto($new_id, $FILES, $POST, $directory);
        var_dump($new_id, $POST['lieu'], $fileInfo['extension']);
        $new_id_int = intval($new_id);
        $sql_img = new img_info($new_id_int, $POST['lieu'], $fileInfo['extension'], $directory);
        $sql_img->insetPatchImage();
        //  ici il faudrat appeler la function / constructor 
        var_dump(move_uploaded_file($FILES['photo_intervention']['tmp_name'], "$directory/$photo_name"));

        echo 'Le fichier a été envoyé sur le serveur';
      } else {
        echo 'Ce extension de fichier est interdit';
      }
    } else {
      echo 'Le fichier dépasse la taille autorisée';
    }
  } else {
    echo 'Une erreur est survenue lors de l\'envoi du fichier';
  }
}