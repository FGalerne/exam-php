<?php

namespace MarchandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 */
class Produit
{
    public function __toString()
    {
        return $this->fruit;
    }
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $fruit;

    /**
     * @var integer
     */
    private $price;


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
     * Set fruit
     *
     * @param string $fruit
     * @return Produit
     */
    public function setFruit($fruit)
    {
        $this->fruit = $fruit;

        return $this;
    }

    /**
     * Get fruit
     *
     * @return string 
     */
    public function getFruit()
    {
        return $this->fruit;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Produit
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * @var string
     */
    private $commande;


    /**
     * Set commande
     *
     * @param string $commande
     * @return Produit
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
     * @return Produit
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
