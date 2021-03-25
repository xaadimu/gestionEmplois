<?php
use \libs\system\Controller;
use src\model\EntrepriseRepository;
class EntrepriseController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function liste()
    {
        $entreprisedb = new EntrepriseRepository();
        $data ["listeEntreprise"] = $entreprisedb->getAll();
        return $this->view->load("entreprise/liste", $data);
    }
    public function insert()
    {
        extract($_POST);
        $entreprise = new Entreprise();
        $entreprise->setNom($nom);
        $entreprise->setPoste($poste);

        $entreprisedb = new EntrepriseRepository();
        $entreprisedb->insert($entreprisedb);
        return $this->liste();
    }
    public function edit ($id)
    {
        $entreprisedb = new EntrepriseRepository();
        $data["demandeur"] = $entreprisedb->get($id);
        return $this->view->load("entreprise/edit", $data);
    }

}
?>