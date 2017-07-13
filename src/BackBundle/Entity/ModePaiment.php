<?php
/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */
namespace BackBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="mode_paiment")
 * @UniqueEntity(fields="type", message="Ce type existe  déjà.")
 */
class ModePaiment
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255,nullable=true,unique=true)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     * @Assert\Length(
     *      min = 1,
     *      max = 100,
     *      minMessage = "min {{ limit }} caractères",
     *      maxMessage = "max {{ limit }} caractères"
     * )
     *
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity="SecurityUserBundle\Entity\Medecin", mappedBy="modepaiments")
     */
    private $medecins;

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
    public function getMedecins()
    {
        return $this->medecins;
    }

    public function setMedecins($medecins)
    {
        $this->medecins = $medecins;
    }

    public function __construct()
    {
        $this->medecins = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function __toString()
    {
        return $this->type . '';
    }
}
