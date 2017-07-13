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
 * @ORM\Table(name="specialite_medecin")
 * @UniqueEntity(fields="nomSpecialite", message="Ce nom de Specialite existe déjà  .")
 * @ORM\HasLifecycleCallbacks
 */
class Specialite {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="nom_specialite", type="string", length=255,nullable=true,unique=true)
     * @Assert\NotBlank(message="Cette valeur ne doit pas être vide.")
     * @Assert\Length(
     *      min = 1,
     *      max = 100,
     *      minMessage = "min {{ limit }} caractères",
     *      maxMessage = "max {{ limit }} caractères"
     * )
     *
     */
    private $nomSpecialite;

    /**
     * @ORM\Column(type="string",length=255, nullable=true) 
     */
    private $path;
    public $file;

    /**
     * @ORM\ManyToMany(targetEntity="SecurityUserBundle\Entity\RaisonVisite", inversedBy="specialites")
     * @ORM\JoinTable(name="raison_visite_specialite")
     */
    private $raisonvisites;

    public function getId() {
        return $this->id;
    }

    public function getNomSpecialite() {
        return $this->nomSpecialite;
    }

    public function setNomSpecialite($nomSpecialite) {
        $this->nomSpecialite = $nomSpecialite;
    }

    public function __toString() {
        return $this->nomSpecialite . '';
    }

    function getPath() {
        return $this->path;
    }

    function setPath($path) {
        $this->path = $path;
    }

    public function getUploadRootDir() {

        $upload = __dir__ . '/../../../web/upload';
        if (!is_dir($upload)) {
            mkdir($upload, 0700);
        }

        $imgmsg = __dir__ . '/../../../web/upload/img-msg';
        if (!is_dir($imgmsg)) {
            mkdir($imgmsg, 0700);
        }

        return __dir__ . '/../../../web/upload/img-msg';
    }

    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }

    public function getAssetPath() {
        return 'upload/img-msg/' . $this->path;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate() 
     */
    public function preUpload() {
        $this->tempFile = $this->getAbsolutePath();
        $this->oldFile = $this->getPath();
        $this->updateAt = new \DateTime();

        if (null !== $this->file) {
            $this->path = sha1(uniqid(mt_rand(), true)) . '.' . $this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate() 
     */
    public function upload() {

        if (null !== $this->file) {
            $this->file->move($this->getUploadRootDir(), $this->path);
            unset($this->file);
            if ($this->oldFile != null) {
                unlink($this->tempFile);
            }
        }
    }

    /**
     * @ORM\PreRemove() 
     */
    public function preRemoveUpload() {
        $this->tempFile = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove() 
     */
    public function removeUpload() {
        if (file_exists($this->tempFile)) {
            unlink($this->tempFile);
        }
        if (file_exists($this->tempFileson)) {
            unlink($this->tempFileson);
        }
    }

    function getRaisonvisites() {
        return $this->raisonvisites;
    }

    function setRaisonvisites($raisonvisites) {
        $this->raisonvisites = $raisonvisites;
    }

}
