<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace SecurityUserBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="raison_visite")
 * @UniqueEntity(fields="raison", message="Ce raison de visite existe déjà  .")
 * @ORM\HasLifecycleCallbacks
 */
class RaisonVisite {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="raison", type="string", length=255,nullable=true,unique=true)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     * @Assert\Length(
     *      min = 1,
     *      max = 100,
     *      minMessage = "min {{ limit }} caractères",
     *      maxMessage = "max {{ limit }} caractères"
     * )
     *
     */
    private $raison;

 
    public function getId() {
        return $this->id;
    }

    function getRaison() {
        return $this->raison;
    }

    function setRaison($raison) {
        $this->raison = $raison;
    }



}
