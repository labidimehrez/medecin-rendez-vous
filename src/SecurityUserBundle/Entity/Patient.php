<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace SecurityUserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="patient_user")
 * @UniqueEntity(fields="telephone", message="Ce numero de telephone existe déjà  .")
 */
class Patient extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="telephone", type="string", length=255, nullable =true,unique=true)
     */
    private $telephone;

    /**
     * @var string
     * @ORM\Column(name="date_naissance",   type="date", nullable =true)
     */
    private $datenaissance;

    /**
     * @var boolean
     * @ORM\Column(name="genre",  nullable=true)
     */
    private $genre;


    public function getId()
    {
        return $this->id;
    }
    public function getTelephone()
    {
        return $this->telephone;
    }

    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }



    public function __construct()
    {
        parent::__construct();
        $this->roles = array('ROLE_USER');
    }
}
