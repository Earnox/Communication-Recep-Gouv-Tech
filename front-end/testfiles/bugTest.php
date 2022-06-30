<?php

function renamephoto($new_id, $photo, $post)
{

  $new_id = strval($new_id);
  return $new_id . "-" . $post['lieu'] . '.' . 'png';
}
function traitement_img($new_id, $FILES, $POST)
{
  $extensions = array('jpg', 'png', 'gif');

  if (isset($FILES['photo_intervention']) && !$FILES['photo_intervention']['error']) {
    $fileInfo = pathinfo($FILES['photo_intervention']['name']);

    if ($FILES['photo_intervention']['size'] <= 2000000) {

      if (in_array($fileInfo['type'], $extensions)) {
        // Scripts à exécuter quand les contrôles sont bons. 

        $directory = '../image_intervention_Tech';
        if (!isset($directory)) {
          mkdir($directory, 0777);
        }
      } else {
        echo 'Ce type de fichier est interdit';
      }
    } else {
      echo 'Le fichier dépasse la taille autorisée';
    }
  } else {
    echo 'Une erreur est survenue lors de l\'envoi du fichier';
  }

  $photo_name = renamephoto($new_id, $fileInfo, $POST,);

  var_dump(move_uploaded_file($FILES['photo_intervention']['tmp_name'], "$directory/$photo_name"));
  echo 'Le fichier a été envoyé sur le serveur';
}