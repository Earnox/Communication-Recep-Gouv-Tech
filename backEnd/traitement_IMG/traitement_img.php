<?php

function renamephoto($new_id, $photo, $post)
{


  var_dump($photo);
  return $new_id . "-" . $post['lieu'] . '.' . $photo['photo_intervention']['type'];
}
function traitement_img($new_id, $FILES, $POST)
{
  $extensions = array('jpg', 'png', 'gif');
  if (isset($FILES['photo_intervention']) && !$FILES['photo_intervention']['error']) {
    $fileInfo = pathinfo($FILES['photo_intervention']['name']);

    if ($FILES['photo_intervention']['size'] <= 2000000) {

      if (in_array($fileInfo['extension'], $extensions)) {
        // Scripts à exécuter quand les contrôles sont bons. 
        echo 'ici';
        $directory = './image_intervention_Tech';
        if (!isset($directory)) {
          echo ' on est ici ';
        }
      } else {
        echo 'Ce extension de fichier est interdit';
      }
    } else {
      echo 'Le fichier dépasse la taille autorisée';
    }
  } else {
    echo 'Une erreur est survenue lors de l\'envoi du fichier';
  }

  mkdir($directory, 0777, true);
  $photo_name = renamephoto($new_id, $FILES, $POST,);
  move_uploaded_file($photo_name, "$directory/$photo_name");
  echo 'Le fichier a été envoyé sur le serveur';
}