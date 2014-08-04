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
     * @ORM\ManyToOne(targetEntity="Modelo", inversedBy="canjes")
     * @ORM\JoinColumn(name="modelo_id", referencedColumnName="id")
     */
        
    private $modeloLegacy;
    
    /**
     * @ORM\ManyToOne(targetEntity="Sucursal", inversedBy="canjes")
     * @ORM\JoinColumn(name="sucursal_id", referencedColumnName="id")
     */
        
    private $sucursal;      
    
    /**
     * @ORM\Column(name="imeiNuevo", type="string", length=15)
     */
     
    private $imeiNuevo;
    
    /**
     * @ORM\Column(name="idNuevo", type="integer",nullable=true)
     */
     
    private $idNuevo;
    
    /**
     * @ORM\ManyToOne(targetEntity="Producto", inversedBy="canjes")
     * @ORM\JoinColumn(name="producto_id", referencedColumnName="id")
     */
     
     private $productoNuevo;     
      
    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
        
    private $createdAt;
    
    /**
     * @ORM\Column(name="modified_at", type="datetime",nullable=true)
     */
     
    
    private $modifiedAt;
   
     /**
     * @ORM\Column(name="is_delete", type="boolean" )
     */
    private $isDelete;
        
	 /**
     * Constructor
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
        $this->isDelete=false;       
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
     * @ORM\PreUpdate()
     * 
     */
     
    public function modifiedUpdate(){
    
      $this->setModifiedAt(new \DateTime('now'));
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

    /**
     * Set imeiNuevo
     *
     * @param string $imeiNuevo
     * @return Canje
     */
    public function setImeiNuevo($imeiNuevo)
    {
        $this->imeiNuevo = $imeiNuevo;
    
        return $this;
    }

    /**
     * Get imeiNuevo
     *
     * @return string 
     */
    public function getImeiNuevo()
    {
        return $this->imeiNuevo;
    }

    /**
     * Set modeloLegacy
     *
     * @param \Backend\AdminBundle\Entity\Modelo $modeloLegacy
     * @return Canje
     */
    public function setModeloLegacy(\Backend\AdminBundle\Entity\Modelo $modeloLegacy = null)
    {
        $this->modeloLegacy = $modeloLegacy;
    
        return $this;
    }

    /**
     * Get modeloLegacy
     *
     * @return \Backend\AdminBundle\Entity\Modelo 
     */
    public function getModeloLegacy()
    {
        return $this->modeloLegacy;
    }

    /**
     * Set modifiedAt
     *
     * @param \DateTime $modifiedAt
     * @return Canje
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
    
        return $this;
    }

    /**
     * Get modifiedAt
     *
     * @return \DateTime 
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * Set isDelete
     *
     * @param boolean $isDelete
     * @return Canje
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

    /**
     * Set sucursal
     *
     * @param \Backend\AdminBundle\Entity\Sucursal $sucursal
     * @return Canje
     */
    public function setSucursal(\Backend\AdminBundle\Entity\Sucursal $sucursal = null)
    {
        $this->sucursal = $sucursal;
    
        return $this;
    }

    /**
     * Get sucursal
     *
     * @return \Backend\AdminBundle\Entity\Sucursal 
     */
    public function getSucursal()
    {
        return $this->sucursal;
    } 
    
    /**
     * Get Centro
     *
     * @return \Backend\AdminBundle\Entity\C 
     */    
    
    public function getCentro(){
		
		return $this->sucursal->centro;
	
	}  
    

    /**
     * Set idNuevo
     *
     * @param integer $idNuevo
     * @return Canje
     */
    public function setIdNuevo($idNuevo)
    {
        $this->idNuevo = $idNuevo;
    
        return $this;
    }

    /**
     * Get idNuevo
     *
     * @return integer 
     */
     
    public function getIdNuevo()
    {
        return $this->idNuevo;
    }
    
    
    public function getProductoNuevo(){
	
		return $this->productoNuevo;	
	
	}

    /**
     * Set productoNuevo
     *
     * @param \Backend\AdminBundle\Entity\Producto $productoNuevo
     * @return Canje
     */

    public function setProductoNuevo(\Backend\AdminBundle\Entity\Producto $productoNuevo = null)
    {
        $this->productoNuevo = $productoNuevo;
    
        return $this;
    }

}