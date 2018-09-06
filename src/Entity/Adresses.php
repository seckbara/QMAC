<?php
/**
 * Created by PhpStorm.
 * User: seck
 * Date: 06/09/2018
 * Time: 11:43
 */

namespace GestionUser\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="adresses")
 */
class Adresses
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $numero_rue;

    /**
     * @ORM\Column(type="string")
     */
    private $nom_rue;

    /**
     * @ORM\Column(type="string")
     */
    private $ville;

    /**
     * @ORM\Column(type="string")
     */
    private $region;

    /**
     * @ORM\Column(type="string")
     */
    private $code_postale;

    /**
     * @ORM\Column(type="string")
     */
    private $pays;

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
    public function getNumeroRue()
    {
        return $this->numero_rue;
    }

    /**
     * @param mixed $numero_rue
     */
    public function setNumeroRue($numero_rue)
    {
        $this->numero_rue = $numero_rue;
    }

    /**
     * @return mixed
     */
    public function getNomRue()
    {
        return $this->nom_rue;
    }

    /**
     * @param mixed $nom_rue
     */
    public function setNomRue($nom_rue)
    {
        $this->nom_rue = $nom_rue;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return mixed
     */
    public function getCodePostale()
    {
        return $this->code_postale;
    }

    /**
     * @param mixed $code_postale
     */
    public function setCodePostale($code_postale)
    {
        $this->code_postale = $code_postale;
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return mixed|string
     */
    public function __toString()
    {
        $format = "Utilisateur: (Identifiant : %s, nom  rue: %s)";
        return sprintf($format, $this->getId(), $this->getNomRue());
    }
}
