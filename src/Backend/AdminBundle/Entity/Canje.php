<?php

namespace Backend\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="canje")
 * @ORM\Entity()
 */

class Canje
{

	/**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    
    private $id;
    
    /**
     * @ORM\Column(name="imeiLegacy", type="string", length=15)
     */
    private $imeiLegacy;
    
    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    
    private $createdAt;
    
    

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
     * Set imeiLegacy
     *
     * @param string $imeiLegacy
     * @return Canje
     */
    public function setImeiLegacy($imeiLegacy)
    {
        $this->imeiLegacy = $imeiLegacy;
    
        return $this;
    }

    /**
     * Get imeiLegacy
     *
     * @return string 
     */
    public function getImeiLegacy()
    {
        return $this->imeiLegacy;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Canje
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}