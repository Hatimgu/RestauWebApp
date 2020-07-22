<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plats
 *
 * @ORM\Table(name="plats")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\PlatsRepository")
 */
class Plats
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
     * @var string
     *
     * @ORM\Column(name="Plat_name", type="string", length=255)
     */
    private $platName;

    /**
     * @var string
     *
     * @ORM\Column(name="Plat_description", type="string", length=255)
     */
    private $platDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="Price", type="string", length=255)
     */
    private $price;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_available", type="boolean")
     */
    private $isAvailable;



    
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
     * Set platName
     *
     * @param string $platName
     *
     * @return Plats
     */
    public function setPlatName($platName)
    {
        $this->platName = $platName;

        return $this;
    }

    /**
     * Get platName
     *
     * @return string
     */
    public function getPlatName()
    {
        return $this->platName;
    }

    /**
     * Set platDescription
     *
     * @param string $platDescription
     *
     * @return Plats
     */
    public function setPlatDescription($platDescription)
    {
        $this->platDescription = $platDescription;

        return $this;
    }

    /**
     * Get platDescription
     *
     * @return string
     */
    public function getPlatDescription()
    {
        return $this->platDescription;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Plats
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set isAvailable
     *
     * @param boolean $isAvailable
     *
     * @return Plats
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    /**
     * Get isAvailable
     *
     * @return bool
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }
}

