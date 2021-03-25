<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="lieu")
 **/
class Entreprise
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $poste;

     /**
     * One lieu has many formations. This is the inverse side.
     * @OneToMany(targetEntity="Demandeur", mappedBy="entreprise")
     */
    private $demandeurs;

    public function __construct()
    {
        $this->demandeurs = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPoste()
    {
        return $this->poste;
    }

    public function setPoste($poste)
    {
        $this->poste = $poste;
    }

    public function getDemandeurs()
    {
        return $this->demandeurs;
    }

    public function setDemandeurs($demandeurs)
    {
        $this->demandeurs = $demandeurs;
    }

}

?>