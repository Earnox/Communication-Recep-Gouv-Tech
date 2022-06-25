<?php
require_once '../all_Include/include.php';


try {

  $pdoBDdinterventionEnCour = new PDO('mysql:host=localhost:3307;dbname=interventionTechnique;', 'root', '');
} catch (PDOException $error) {
  echo 'vous avez une erreur lors de la recupération d\'informatior veuilliez contacter le support <br>  ' . PHP_EOL;
  file_put_contents('error_Logs_GetAllIntervention.log', 'Probleme insetion BDD' . $error->getMessage() . PHP_EOL, FILE_APPEND);
}