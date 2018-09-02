<?php

namespace GestionUser\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs implements \InterfaceUsers
{
    /**
     * @Id
     * @GeneratedValue
     * @@ORM\Column(type="integer")
     */
    private $id;

    /**
     * @@ORM\Column(type="string")
     */
    private $nom;

    /**
     * @@ORM\Column(type="string")
     */
    private $prenom;

    /**
     * @@ORM\Column(type="string")
     */
    private $fonction;

    /**
     * @@ORM\Column(type="string")
     */
    private $role;

    /**
     * @@ORM\Column(type="string")
     */
    private $dateinsciprtion;

    /**
     * @@ORM\Column(type="date")
     */
    private $sexe;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @param mixed $fonction
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getDateinsciprtion()
    {
        return $this->dateinsciprtion;
    }

    /**
     * @param mixed $dateinsciprtion
     */
    public function setDateinsciprtion($dateinsciprtion)
    {
        $this->dateinsciprtion = $dateinsciprtion;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function __toString()
    {
        $format = "Utilisateur: (Identifiant : %s, nom : %s, prenom : %s, date d'inscription, %s)";
        return sprintf($format, $this->getId(), $this->getNom(), $this->getPrenom(), $this->dateinsciprtion);
    }

}