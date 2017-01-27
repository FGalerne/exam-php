<?php

namespace MarchandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 */
class Client
{
    public function __toString()
    {
        return $this->nom;
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Client
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
     * @var string
     */
    private $commande;


    /**
     * Set commande
     *
     * @param string $commande
     * @return Client
     */
    public function setCommande($commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return string 
     */
    public function getCommande()
    {
        return $this->commande;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commande = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commande
     *
     * @param \MarchandBundle\Entity\Commande $commande
     * @return Client
     */
    public function addCommande(\MarchandBundle\Entity\Commande $commande)
    {
        $this->commande[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \MarchandBundle\Entity\Commande $commande
     */
    public function removeCommande(\MarchandBundle\Entity\Commande $commande)
    {
        $this->commande->removeElement($commande);
    }
}
