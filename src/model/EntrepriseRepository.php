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

class EntrepriseRepository extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAll()
    {
        return $this->db->getRepository("Entreprise")->findAll();
    }
    public function insert($entreprise)
    {
        $this->db->persist($entreprise);
        $this->db->flush();
    }

    public function get($id)
    {
        return $this->db->getRepository("Entreprise")->find(array("id"=>$id));
    }

}
