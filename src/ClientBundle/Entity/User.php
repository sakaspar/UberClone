<?php

namespace ClientBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="password_plain", type="string", length=20, nullable=true)
     */
    private $passwordPlain;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=30, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approuved", type="boolean", nullable=true)
     */
    private $approuved;

    /**
     * @var boolean
     *
     * @ORM\Column(name="banned", type="boolean", nullable=false)
     */
    private $banned = false;

    /**
     * @var integer
     *
     * @ORM\Column(name="earnings", type="integer", nullable=true)
     */
    private $earnings = false;

    /**
     * @var integer
     *
     * @ORM\Column(name="licence", type="integer", nullable=true)
     */
    private $licence = false;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255,  nullable=true)
     */
    private $img = false;

    /**
     * @var string
     *
     * @ORM\Column(name="Role", type="string", length=100, nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private $image = "client/images/user.png";

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;






    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }





    /**
     * Set passwordPlain
     *
     * @param string $passwordPlain
     *
     * @return User
     */
    public function setPasswordPlain($passwordPlain)
    {
        $this->passwordPlain = $passwordPlain;

        return $this;
    }

    /**
     * Get passwordPlain
     *
     * @return string
     */
    public function getPasswordPlain()
    {
        return $this->passwordPlain;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return User
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set approuved
     *
     * @param boolean $approuved
     *
     * @return User
     */
    public function setApprouved($approuved)
    {
        $this->approuved = $approuved;

        return $this;
    }

    /**
     * Get approuved
     *
     * @return boolean
     */
    public function getApprouved()
    {
        return $this->approuved;
    }

    /**
     * Set banned
     *
     * @param boolean $banned
     *
     * @return User
     */
    public function setBanned($banned)
    {
        $this->banned = $banned;

        return $this;
    }

    /**
     * Get banned
     *
     * @return boolean
     */
    public function getBanned()
    {
        return $this->banned;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return User
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
