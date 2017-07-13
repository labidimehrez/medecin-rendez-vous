<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace BackBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;
use SecurityUserBundle\Entity\Medecin;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="BackBundle\Repository\RendezvousRepository")
 * @ORM\Table(name="rendez_vous")
 */
class Rendezvous
{
    const NOUVELLE_CONSULTATION = 'NOUVELLE_CONSULTATION';
    const RENOUVELLEMENT_TRAITEMENT = 'RENOUVELLEMENT_TRAITEMENT';

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=10,nullable=true)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="minute", type="string", length=10)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     * @Assert\Range(
     *      min = 1,
     *      max = 60,
     *      minMessage = "la valeur min autorise est  {{ limit }} ",
     *      maxMessage = "la valeur max autorise est  {{ limit }} "
     * )
     */
    private $minute;

    /**
     * @var string
     *
     * @ORM\Column(name="heure",  type="string", length=10)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     * @Assert\Range(
     *      min = 8,
     *      max = 17,
     *      minMessage = "la valeur min autorise est  {{ limit }} ",
     *      maxMessage = "la valeur max autorise est  {{ limit }} "
     * )
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="jour", type="string", length=10)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     * @Assert\Range(
     *      min = 1,
     *      max = 31,
     *      minMessage = "la valeur min autorise est  {{ limit }} ",
     *      maxMessage = "la valeur max autorise est  {{ limit }} "
     * )
     */
    private $jour;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=10)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     */
    private $mois;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer", length=20)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     * @Assert\Range(
     *      min = 2000,
     *      max = 2050,
     *      minMessage = "la valeur min autorise est  {{ limit }} ",
     *      maxMessage = "la valeur max autorise est  {{ limit }} "
     * )
     */
    private $annee;

    /**
     * @var string
     * @ORM\Column(name="type", type="string", length=50)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity="SecurityUserBundle\Entity\Medecin", inversedBy="rendezvous")
     * @ORM\JoinTable(name="medecin_rendez_vous")
     */
    private $medecins;

    /**
     * @ORM\ManyToOne(targetEntity="SecurityUserBundle\Entity\Patient")
     * @ORM\JoinColumn(nullable=true)
     */
    private $patients;
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_validated", type="boolean")
     */
    private $isValidated;

    public function getId()
    {
        return $this->id;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    public function getMinute()
    {
        return $this->minute;
    }

    public function getHeure()
    {
        return $this->heure;
    }

    public function getJour()
    {
        return $this->jour;
    }

    public function getMois()
    {
        return $this->mois;
    }

    public function getAnnee()
    {
        return $this->annee;
    }

    public function setMinute($minute)
    {
        if (strlen($minute) > 2) {
            $this->minute = substr($minute, -2);
        } else {
            $this->minute = str_pad($minute, 2, "0", STR_PAD_LEFT);
        }
    }

    public function setHeure($heure)
    {
        if (strlen($heure) > 2) {
            $this->heure = substr($heure, -2);
        } else {
            $this->heure = str_pad($heure, 2, "0", STR_PAD_LEFT);
        }
    }

    public function setJour($jour)
    {
        if (strlen($jour) > 2) {
            $this->jour = substr($jour, -2);
        } else {
            $this->jour = str_pad($jour, 2, "0", STR_PAD_LEFT);
        }
    }

    public function setMois($mois)
    {
        if (strlen($mois) > 2) {
            $this->mois = substr($mois, -2);
        } else {
            $this->mois = str_pad($mois, 2, "0", STR_PAD_LEFT);
        }
    }

    public function setAnnee($annee)
    {
        if (strlen($annee) > 4) {
            $this->annee = substr($annee, -4);
        } else {
            $this->annee = str_pad($annee, 4, "0", STR_PAD_LEFT);
        }
    }

    public function setType($type)
    {
        if (!$type) {
            $type = "NOUVELLE CONSULTATION";
        }
        $this->type = $type;
    }

    public function getMedecins()
    {
        return $this->medecins;
    }

   /* public function setMedecins($medecins)
    {
        $this->medecins = $medecins;
    }
*/   public function addMedecin(Medecin $medecins)
   {
       if (!$this->medecins->contains($medecins)) {
           $this->medecins->add($medecins);
       }
   }
    public function setMedecins($items)
    {
        if ($items instanceof ArrayCollection || is_array($items)) {
            foreach ($items as $item) {
                $this->addMedecin($item);
            }
        } elseif ($items instanceof Medecin) {
            $this->addMedecin($items);
        } else {
            throw new \Exception("$items must be an instance of  Medecin or ArrayCollection");
        }
    }
    public function getType()
    {
        return $this->type;
    }

    public function getPatients()
    {
        return $this->patients;
    }

    public function setPatients($patients)
    {
        $this->patients = $patients;
    }
    public function getIsValidated()
    {
        return $this->isValidated;
    }

    public function setIsValidated($isValidated)
    {
        $this->isValidated = $isValidated;
    }

    public function __construct()
    {
        $this->medecins = new  ArrayCollection();
        $this->isValidated = false;
    }
}
