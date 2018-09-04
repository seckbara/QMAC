<?php

namespace GestionUser\Entity;
use Doctrine\ORM\Mapping as ORM;
use GestionUser\Entity\InterfaceUsers;
/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs implements InterfaceUsers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string")
     */
    public $nom;

    /**
     * @ORM\Column(type="string")
     */
    public $prenom;

    /**
     * @ORM\Column(type="string")
     */
    public $fonction;

    /**
     * @ORM\Column(type="string")
     */
    public $role;

    /**
     * @ORM\Column(type="string")
     */
    public $dateinsciprtion;

    /**
     * @ORM\Column(type="string")
     */
    public $sexe;

    /**
     * @ORM\Column(type="string")
     */
    public $email;

    /**
     * @ORM\Column(type="string")
     */
    public $password;

    /**
     * @ORM\Column(type="string")
     */
    public $cpassword;
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

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getCpassword()
    {
        return $this->cpassword;
    }

    /**
     * @param mixed $cpassword
     */
    public function setCpassword($cpassword)
    {
        $this->cpassword = $cpassword;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }



    public function __toString()
    {
        $format = "Utilisateur: (Identifiant : %s, nom : %s, prenom : %s, date d'inscription, %s)";
        return sprintf($format, $this->getId(), $this->getNom(), $this->getPrenom(), $this->dateinsciprtion);
    }

}