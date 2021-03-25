<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model;

use libs\system\Model;

class DemandeurRepository extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAll()
    {
        return $this->db->getRepository("Demandeur")->findAll();
    }
    public function insert($demandeur)
    {
        $this->db->persist($demandeur);
        $this->db->flush();
    }
    public function update($demandeur)
    {
        //Le demandeur de la base de donnees
        $d = $this->get($demandeur->getId());
        //Modification des donnees de ce demandeur passe en parametres
        $d->setNom($demandeur->getNom());
        $d->setPrenom($demandeur->getPrenom());
        $d->setAge($demandeur->getAge());
        $d->setAdresse($demandeur->getAdresse());
        $d->setEmail($demandeur->getEmail());
        $d->setTelephone($demandeur->getTelephone());
        $d->setSpecialite($demandeur->getSpecialite());
        $d->setNiveau($demandeur->getNiveau());
        $d->setExperience($demandeur->getExperience());
        $this->db->flush();
    }
    public function get($id)
    {
        return $this->db->getRepository("Demandeur")->find(array("id"=>$id));
    }
}