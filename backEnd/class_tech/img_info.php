<?php

class img_info
{
  public int $id_tech;
  public string $lieu_intervention;
  public string $extention_photo;
  public function __construct(int $id_tech, string $lieu_intervention, string $extention_photo)
  {
    $this->id_tech = $id_tech;
    $this->lieu_intervention = $lieu_intervention;
    $this->extention_photo = $extention_photo;
  }



  public function insetPatchImage()
  {


    try {

      // $nvimg = new img_info(int $id_intevention_tech, string $lieu_intervention_img );
      // $nv_image = new img_info();
      $pdoBDresidence = new PDO('mysql:host=localhost:3307;dbname=Residence_isatis;', 'root', '');
      $sqlnewPhoto = $pdoBDresidence->prepare(
        "INSERT INTO path_Image( 
    id_tech,
    lieu_tech,
    extention_photo
     ) 
    VALUES(  
    :id_tech,
    :lieu_tech ,
    :extention_photo     
   )"
      );


      $sqlnewPhoto->bindValue(':id_tech', $this->id_tech, PDO::PARAM_INT);
      $sqlnewPhoto->bindValue(':lieu_tech', $this->lieu_intervention, PDO::PARAM_STR);
      $sqlnewPhoto->bindValue('::extention_photo', $this->extention_photo, PDO::PARAM_STR);
      $sqlnewPhoto->execute();
      // funtion to get create image to save it and return the path 
      return $sqlnewPhoto->fetchAll();
    } catch (PDOException $error) {
      echo 'vous avez une erreur lors de l\'insetion d\'informatior veuilliez contacter le support <br>  ' . PHP_EOL;
      file_put_contents('error_Logs_Instalation.log', 'Probleme insetion BDD' . $error->getMessage() . PHP_EOL, FILE_APPEND);
    }
  }
}