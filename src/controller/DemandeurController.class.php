<?php
use \libs\system\Controller;
use src\model\DemandeurRepository;
class DemandeurController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function liste()
    {
        $demandeurdb = new DemandeurRepository();
        $data ["listeDemandeur"] = $demandeurdb->getAll();
        return $this->view->load("demandeur/liste", $data);
    }
    public function insert()
    {
        extract($_POST);
        $demandeur = new Demandeur();
        $demandeur->setNom($nom);
        $demandeur->setPrenom($prenom);
        $demandeur->setAge($age);
        $demandeur->setAdresse($adresse);
        $demandeur->setEmail($email);
        $demandeur->setTelephone($telephone);
        $demandeur->setSpecialite($specialite);
        $demandeur->setNiveau($niveau);
        $demandeur->setExperience($experience);

        $demandeurdb = new DemandeurRepository();
        $demandeurdb->insert($demandeur);
        return $this->liste();
    }
    public function edit ($id)
    {
        $demandeurdb = new DemandeurRepository();
        $data["demandeur"] = $demandeurdb->get($id);
        return $this->view->load("demandeur/edit", $data);
    }

   public function update ()
   {
       extract($_POST);
       $demandeur = new Demandeur();
       $demandeur->setId($id);
       $demandeur->setNom($nom);
       $demandeur->setPrenom($prenom);
       $demandeur->setAge($age);
       $demandeur->setAdresse($adresse);
       $demandeur->setEmail($email);
       $demandeur->setTelephone($telephone);
       $demandeur->setSpecialite($specialite);
       $demandeur->setNiveau($niveau);
       $demandeur->setExperience($experience);

       $demandeurdb = new DemandeurRepository();
       $demandeurdb->update($demandeur);
       return $this->liste();
   }
}
?>