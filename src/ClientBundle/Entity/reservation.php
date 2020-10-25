<?php

namespace ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="ClientBundle\Repository\reservationRepository")
 */
class reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \ClientBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="ClientBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \ClientBundle\Entity\Trajet
     *
     * @ORM\ManyToOne(targetEntity="ClientBundle\Entity\Trajet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTrajet", referencedColumnName="id")
     * })
     */
    private $idTrajet;

    /**
     * @var bool
     *
     * @ORM\Column(name="approuved", type="boolean")
     */
    private $approuved;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return reservation
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idTrajet
     *
     * @param integer $idTrajet
     *
     * @return reservation
     */
    public function setIdTrajet($idTrajet)
    {
        $this->idTrajet = $idTrajet;

        return $this;
    }

    /**
     * Get idTrajet
     *
     * @return int
     */
    public function getIdTrajet()
    {
        return $this->idTrajet;
    }

    /**
     * Set approuved
     *
     * @param boolean $approuved
     *
     * @return reservation
     */
    public function setApprouved($approuved)
    {
        $this->approuved = $approuved;

        return $this;
    }

    /**
     * Get approuved
     *
     * @return bool
     */
    public function getApprouved()
    {
        return $this->approuved;
    }
}

