<?php
// funtion to add a new intervention tech
// require_once 'C:\xampp\htdocs\application_Gouv_tech\backEnd\all_Include\include.php';

// script.php.
function insetPatchImage()
{


  try {

    // $nvimg = new img_info(int $id_intevention_tech, string $lieu_intervention_img );
    // $nv_image = new img_info();
    $pdoBDresidence = new PDO('mysql:host=localhost:3307;dbname=Residence_isatis;', 'root', '');
    $sqlnewPhoto = $pdoBDresidence->prepare(
      "INSERT INTO path_Image( 
    id_tech,
    lieu_tech
     ) 
    VALUES(  
    :id_tech,
    :lieu_tech      
   )"
    );


    $sqlnewPhoto->bindValue(':id_tech', 2, PDO::PARAM_INT);
    $sqlnewPhoto->bindValue(':lieu_tech', '218', PDO::PARAM_STR);
    $sqlnewPhoto->execute();
    // funtion to get create image to save it and return the path 
    return $sqlnewPhoto->fetchAll();
  } catch (PDOException $error) {
    echo 'vous avez une erreur lors de l\'insetion d\'informatior veuilliez contacter le support <br>  ' . PHP_EOL;
    file_put_contents('error_Logs_Instalation.log', 'Probleme insetion BDD' . $error->getMessage() . PHP_EOL, FILE_APPEND);
  }
}