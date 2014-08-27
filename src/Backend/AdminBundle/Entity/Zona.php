<?php

namespace Backend\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="zona")
 * @ORM\Entity()
 */

class Zona
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
     * @ORM\ManyToOne(targetEntity="Provincia", inversedBy="zonas")
     * @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     */

    protected $provincia;    
    
    /**
     * @ORM\OneToMany(targetEntity="Sucursal", mappedBy="zona")
     */
    
    protected $sucursales; 
    
     /**
     * @ORM\Column(name="is_delete", type="boolean" )
     */
    
    private $isDelete; 
    
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
     * @return Zona
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
     * Set provincia
     *
     * @param \Backend\AdminBundle\Entity\Provincia $provincia
     * @return Zona
     */
    public function setProvincia(\Backend\AdminBundle\Entity\Provincia $provincia = null)
    {
        $this->provincia = $provincia;
    
        return $this;
    }

    /**
     * Get provincia
     *
     * @return \Backend\AdminBundle\Entity\Provincia 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sucursales = new \Doctrine\Common\Collections\ArrayCollection();
        $this->isDelete=false; 
    }
    
    /**
     * Add sucursales
     *
     * @param \Backend\AdminBundle\Entity\Sucursal $sucursales
     * @return Zona
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
     * Set isDelete
     *
     * @param boolean $isDelete
     * @return Zona
     */
    public function setIsDelete($isDelete)
    {
        $this->isDelete = $isDelete;
    
        return $this;
    }

    /**
     * Get isDelete
     *
     * @return boolean 
     */
    public function getIsDelete()
    {
        return $this->isDelete;
    }
}