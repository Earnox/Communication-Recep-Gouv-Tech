<?php

function renamephoto($new_id, $photo, $post)
{
  // here funtion to get the info of in img to put extension 
  $fileInfo = pathinfo($photo['photo_intervention']['name']);

  return $new_id . "-" . $post['lieu'] . '.' . $fileInfo['extension'];
}
function traitement_img($new_id, $FILES, $POST)
{
  $directory = 'C:\xampp\htdocs\application_Gouv_tech\backEnd\traitementIntervention\image_intervention_Tech';
  if (!is_dir($directory)) {
    echo ' on est ici ';
    var_dump(mkdir($directory, 0777));
  }
  $extensions = array('jpg', 'png', 'gif');
  if (isset($FILES['photo_intervention']) && !$FILES['photo_intervention']['error']) {
    $fileInfo = pathinfo($FILES['photo_intervention']['name']);

    if ($FILES['photo_intervention']['size'] <= 2000000) {

      if (in_array($fileInfo['extension'], $extensions)) {
        // Scripts à exécuter quand les contrôles sont bons. 




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
var_dump($FILES);
$photo_name = renamephoto($new_id, $FILES, $POST,);

var_dump(move_uploaded_file($FILES['photo_intervention']['tmp_name'], "$directory/$photo_name"));
echo 'Le fichier a été envoyé sur le serveur';