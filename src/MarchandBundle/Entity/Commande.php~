<?php

namespace MarchandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 */
class Commande
{
/*    public function __toString()
    {
        return $this->id;
    }*/

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $totalPrice;

    /**
     * @var integer
     */
    private $quantity;


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
     * Set totalPrice
     *
     * @param integer $totalPrice
     * @return Commande
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return integer 
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Commande
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * @var string
     */
    private $client;


    /**
     * Set client
     *
     * @param string $client
     * @return Commande
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }
    /**
     * @var string
     */
    private $produit;


    /**
     * Set produit
     *
     * @param string $produit
     * @return Commande
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return string 
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
