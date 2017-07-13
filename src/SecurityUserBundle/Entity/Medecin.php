<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace SecurityUserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use BackBundle\Entity\Rendezvous;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="medecin_user")
 * @UniqueEntity(fields="telephone", message="Ce numero de telephone existe déjà  .")
 * @ORM\AttributeOverrides({
 *      @ORM\AttributeOverride(name="email",
 *          column=@ORM\Column(
 *              name     = "email",
 *              type     = "string",
 *              length   = 50,
 *              nullable = true,
 *              unique=false
 *          )
 *      ),
 *      @ORM\AttributeOverride(name="emailCanonical",
 *          column=@ORM\Column(
 *              name     = "emailCanonical",
 *              type     = "string",
 *              length   = 50,
 *              nullable = true,
 *              unique=false
 *          )
 *      ),
 *      @ORM\AttributeOverride(name="username",
 *          column=@ORM\Column(
 *              name     = "username",
 *              type     = "string",
 *              length   = 50,
 *              nullable = true,
 *              unique=false
 *          )
 *      ),
 *      @ORM\AttributeOverride(name="usernameCanonical",
 *          column=@ORM\Column(
 *              name     = "usernameCanonical",
 *              type     = "string",
 *              length   = 50,
 *              nullable = true,
 *              unique=false
 *          )
 *      ),
 *      @ORM\AttributeOverride(name="salt",
 *          column=@ORM\Column(
 *              name     = "salt",
 *              type     = "string",
 *              length   = 50,
 *              nullable = true,
 *              unique=false
 *          )
 *      ),
 *      @ORM\AttributeOverride(name="password",
 *          column=@ORM\Column(
 *              name     = "password",
 *              type     = "string",
 *              length   = 50,
 *              nullable = true,
 *              unique=false
 *          )
 *      ),
 * })
 */
class Medecin extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="telephone", type="string", length=100,nullable=true,unique=true)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     */
    private $telephone;

    /**
     * @var string
     * @ORM\Column(name="nom", type="string", length=100,nullable=true)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     */
    private $nom;

    /**
     * @var string
     * @ORM\Column(name="adresse", type="string", length=100,nullable=true)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     */
    private $adresse;

    /**
     * @var integer
     * @ORM\Column(name="tarif", type="integer", length=100,nullable=true)
     * @Assert\Type(
     *     type="integer",
     *     message="valeur {{ value }} invalide {{ type }}."
     * )
     */
    private $tarif;

    /**
     * @ORM\ManyToMany(targetEntity="BackBundle\Entity\ModePaiment", inversedBy="medecins")
     * @ORM\JoinTable(name="medecin_paiment")
     */
    private $modepaiments;

    /**
     * @ORM\ManyToOne(targetEntity="SecurityUserBundle\Entity\Specialite")
     * @ORM\JoinColumn(nullable=true)
     */
    private $Specialite;

    /**
     * @ORM\ManyToMany(targetEntity="BackBundle\Entity\Rendezvous", mappedBy="medecins")

     */
    private $rendezvous;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255,nullable=true)
     */
    private $description;
   
    public function __construct()
    {
        parent::__construct();
        $this->modepaiments = new ArrayCollection();
        $this->rendezvous = new ArrayCollection();
        $this->roles = array('ROLE_MEDECIN');

        $this->expired = false;
        $this->locked = false;
        $this->credentialsExpired = false;
        $this->enabled = true;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getTarif()
    {
        return $this->tarif;
    }

    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    }
    public function getRendezvous()
    {
        return $this->rendezvous;
    }

    public function setRendezvous($Rendezvous)
    {
        $this->rendezvous = $Rendezvous;
    }

    public function getModepaiments()
    {
        return $this->modepaiments;
    }

    public function setModepaiments($modepaiments)
    {
        $this->modepaiments = $modepaiments;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getSpecialite()
    {
        return $this->Specialite;
    }

    public function setSpecialite($Specialite)
    {
        $this->Specialite = $Specialite;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}
