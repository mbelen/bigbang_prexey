<?php

namespace Backend\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="provincia")
 * @ORM\Entity()
 */

class Provincia
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
     * @ORM\OneToMany(targetEntity="Zona", mappedBy="provincia")
     */

    protected $zonas;    

    /**
     * @ORM\ManyToOne(targetEntity="Pais", inversedBy="provincias")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     */

    protected $pais;   


    /**
     * @ORM\OneToMany(targetEntity="Sucursal", mappedBy="provincia")
     */
     protected $sucursals;

     /**
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->zonas = new ArrayCollection();
        $this->sucursals = new ArrayCollection();
             
    }
    
     public function __toString()
    {
      return mb_convert_case($this->name, MB_CASE_TITLE,"UTF-8");
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

    /**
     * Set name
     *
     * @param string $name
     * @return Provincia
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
     * Add zonas
     *
     * @param \Backend\AdminBundle\Entity\Zona $zonas
     * @return Provincia
     */
    public function addZona(\Backend\AdminBundle\Entity\Zona $zonas)
    {
        $this->zonas[] = $zonas;
    
        return $this;
    }

    /**
     * Remove zonas
     *
     * @param \Backend\AdminBundle\Entity\Zona $zonas
     */
    public function removeZona(\Backend\AdminBundle\Entity\Zona $zonas)
    {
        $this->zonas->removeElement($zonas);
    }

    /**
     * Get zonas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getZonas()
    {
        return $this->zonas;
    }

    /**
     * Set pais
     *
     * @param \Backend\AdminBundle\Entity\Pais $pais
     * @return Provincia
     */
    public function setPais(\Backend\AdminBundle\Entity\Pais $pais = null)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return \Backend\AdminBundle\Entity\Pais 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Add sucursales
     *
     * @param \Backend\AdminBundle\Entity\Sucursal $sucursales
     * @return Provincia
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
     * @return Provincia
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