<?php

namespace GestionUser\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM/Entity
 */
class Utilisateurs
{
    private $nom;
    private $prenom;
    private $fonction;
    private $role;
    private $dateinsciprtion;
    private $sexe;
}