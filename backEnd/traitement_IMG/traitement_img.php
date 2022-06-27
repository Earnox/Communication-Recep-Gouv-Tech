<?php
function renamephoto($photo, $post)
{

  return $post['id'] . "-" . $post['lieu'] . '.' . $photo['extension'];
}
function traitement_img($_FILES, $_POST)
{
  $extensions = array('jpg', 'png', 'gif');

  if (isset($_FILES['photo_intervention']) && !$_FILES['photo_intervention']['error']) {
    $fileInfo = pathinfo($_FILES['photo_intervention']['name']);

    if ($_FILES['photo_intervention']['size'] <= 2000000) {
      if (in_array($fileInfo['extension'], $extensions)) {
        // Scripts à exécuter quand les contrôles sont bons.            
      } else {
        echo 'Ce type de fichier est interdit';
      }
    } else {
      echo 'Le fichier dépasse la taille autorisée';
    }
  } else {
    echo 'Une erreur est survenue lors de l\'envoi du fichier';
  }
  $directory = '../image_intervention_Tech';
  if (!isset($directory)) {
    mkdir($directory, 0777);
  }
  $photo_name = renamephoto($fileInfo, $_POST);
  var_dump($photo_name);
  move_uploaded_file($_FILES['photo_intervention']['tmp_name'], "$directory/$photo_name");
  echo 'Le fichier a été envoyé sur le serveur';
}