<?php
require_once 'C:\xampp\htdocs\application_Gouv_tech\backEnd\all_Include\include.php';
class nouvelleInterventionTech
{
    public string $lieu;
    public string $nature_Intevention;
    public string $risque;
    public string $info_statut_app;
    public string $postEmployer;
    public string $dateDemandeIntervention;
    public string $date_intevention;
    public string $remarque_intervention;
    public string $statut_intervention;


    public function getIntervention($post): void
    {
        $this->dateDemandeIntervention = $post['dateDemandeIntervention'];
        $this->lieu = $post['lieu'];
        $this->nature_Intevention = $post['nature_Intevention'];
        $this->risque = $post['risque'];
        $this->info_statut_app = $post['info_statut_app'];
        $this->postEmployer = $post['postEmployer'];
        $this->date_intevention = $post['date_intevention'];
        $this->remarque_intervention = $post['remarque_intervention'];
        $this->statut_intervention = $post['statut_intervention'];
        return;
    }
    public function sendInterventionBDD()
    {
    }
}