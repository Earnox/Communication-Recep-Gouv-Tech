<?php
require_once 'C:\xampp\htdocs\application_Gouv_tech\backEnd\class_tech\interventionTech.php';
require_once 'C:\xampp\htdocs\application_Gouv_tech\backEnd/traitementIntervention/getNewIntervention.php';
require_once 'C:\xampp\htdocs\application_Gouv_tech\backEnd/traitementIntervention/getInterventionInProgress.php';
require_once 'C:\xampp\htdocs\application_Gouv_tech\backEnd\traitement_IMG\traitement_img.php';
$dns = 'mysql:host=localhost:3307;';

$database = 'dbname=Residence_isatis;';
$root = 'root';
$mdp_root = '';
$pdoBDdinterventionEnCour = new PDO('mysql:host=localhost:3307;dbname=Residence_isatis;', 'root', '');

echo 'hello world ';

// chemin C:\xampp\htdocs\application_Gouv_tech\backEnd\all_Include\include.php