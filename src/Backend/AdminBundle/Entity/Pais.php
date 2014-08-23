<?php

namespace Backend\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="pais")
 * @ORM\Entity()
 */

class Pais
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;
    
     /**
     * @ORM\OneToMany(targetEntity="Provincia", mappedBy="pais")
     */

    protected $provincias;
      /**
     * @ORM\OneToMany(targetEntity="Sucursal", mappedBy="pais")
     */
     protected $sucursals;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->provincias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sucursals = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString(){
       return $this->name;
    }
    /**
     * Set name
     *
     * @param string $name
     * @return Pais
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add provincias
     *
     * @param \Backend\AdminBundle\Entity\Provincia $provincias
     * @return Pais
     */
    public function addProvincia(\Backend\AdminBundle\Entity\Provincia $provincias)
    {
        $this->provincias[] = $provincias;
    
        return $this;
    }

    /**
     * Remove provincias
     *
     * @param \Backend\AdminBundle\Entity\Provincia $provincias
     */
    public function removeProvincia(\Backend\AdminBundle\Entity\Provincia $provincias)
    {
        $this->provincias->removeElement($provincias);
    }

    /**
     * Get provincias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProvincias()
    {
        return $this->provincias;
    }

    /**
     * Add sucursales
     *
     * @param \Backend\AdminBundle\Entity\Sucursal $sucursales
     * @return Pais
     */
    public function addSucursale(\Backend\AdminBundle\Entity\Sucursal $sucursales)
    {
        $this->sucursales[] = $sucursales;
    
        return $this;
    }

    /**
     * Remove sucursales
     *
     * @param \Backend\AdminBundle\Entity\Sucursal $sucursales
     */
    public function removeSucursale(\Backend\AdminBundle\Entity\Sucursal $sucursales)
    {
        $this->sucursales->removeElement($sucursales);
    }

    /**
     * Get sucursales
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSucursales()
    {
        return $this->sucursales;
    }

    /**
     * Add sucursals
     *
     * @param \Backend\AdminBundle\Entity\Sucursal $sucursals
     * @return Pais
     */
    public function addSucursal(\Backend\AdminBundle\Entity\Sucursal $sucursals)
    {
        $this->sucursals[] = $sucursals;
    
        return $this;
    }

    /**
     * Remove sucursals
     *
     * @param \Backend\AdminBundle\Entity\Sucursal $sucursals
     */
    public function removeSucursal(\Backend\AdminBundle\Entity\Sucursal $sucursals)
    {
        $this->sucursals->removeElement($sucursals);
    }

    /**
     * Get sucursals
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSucursals()
    {
        return $this->sucursals;
    }
}