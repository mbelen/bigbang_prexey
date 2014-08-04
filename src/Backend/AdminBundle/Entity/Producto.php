<?php

namespace Backend\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="producto")
 * @ORM\Entity()
 */

class Producto
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    
    private $id;

    /**
     * @ORM\Column(name="imei", type="string", length=15)
     */
    private $imei;

    /**
     * @ORM\Column(name="msn", type="string", length=15, nullable=true)
     */

    private $msn;
       
    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    
    private $createdAt;

    /**
     * @ORM\Column(name="modified_at", type="datetime",nullable=true)
     */
    
    private $modifiedAt;
    
	/**
     * @ORM\Column(name="is_available", type="boolean" )
     */
    
    private $isAvailable;
  
    /**
     * @ORM\ManyToOne(targetEntity="Sucursal", inversedBy="productos")
     * @ORM\JoinColumn(name="sucursal_id", referencedColumnName="id")
     */
        
    private $sucursal;
    
    /**
     * @ORM\ManyToOne(targetEntity="Modelo", inversedBy="productos")
     * @ORM\JoinColumn(name="modelo_id", referencedColumnName="id")
     */
        
    private $modelo;   
    
    /**
     * @ORM\ManyToOne(targetEntity="Origen", inversedBy="productos")
     * @ORM\JoinColumn(name="origen_id", referencedColumnName="id")
     */
        
    private $origen; 
    
     /**
     * @ORM\OneToMany(targetEntity="Canje", mappedBy="productoNuevo")
     */
    private $canjes;
        
    /**
     * @ORM\Column(name="is_delete", type="boolean" )
     */
 
    private $isDelete;
    
    /**
     * Constructor
     */
    public function __construct()
    {
       $this->canjes = new ArrayCollection(); 
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Sucursal
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
     * Set modifiedAt
     *
     * @param \DateTime $modifiedAt
     * @return Producto
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
     * @return Sucursal
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
     * Set imei
     *
     * @param string $imei
     * @return Producto
     */
    public function setImei($imei)
    {
        $this->imei = $imei;
    
        return $this;
    }

    /**
     * Get imei
     *
     * @return string 
     */
    public function getImei()
    {
        return $this->imei;
    }
    
    /**
     * Set isAvailable
     *
     * @param boolean $isAvailable
     * @return Producto
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;
    
        return $this;
    }

    /**
     * Get isAvailable
     *
     * @return boolean 
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * Set sucursal
     *
     * @param \Backend\AdminBundle\Entity\Sucursal $sucursal
     * @return Producto
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
     * Get centro
     *
     * @return \Backend\AdminBundle\Entity\Centro 
     */
      
    public function getCentro(){
		
		return $this->sucursal->centro;
	
	}	

    /**
     * Set modelo
     *
     * @param \Backend\AdminBundle\Entity\Modelo $modelo
     * @return Producto
     */
    public function setModelo(\Backend\AdminBundle\Entity\Modelo $modelo = null)
    {
        $this->modelo = $modelo;
    
        return $this;
    }

    /**
     * Get modelo
     *
     * @return \Backend\AdminBundle\Entity\Modelo 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set msn
     *
     * @param string $msn
     * @return Producto
     */
    public function setMsn($msn)
    {
        $this->msn = $msn;
    
        return $this;
    }

    /**
     * Get msn
     *
     * @return string 
     */
    public function getMsn()
    {
        return $this->msn;
    }

    /**
     * Set origen
     *
     * @param \Backend\AdminBundle\Entity\Origen $origen
     * @return Producto
     */
    public function setOrigen(\Backend\AdminBundle\Entity\Origen $origen = null)
    {
        $this->origen = $origen;
    
        return $this;
    }

    /**
     * Get origen
     *
     * @return \Backend\AdminBundle\Entity\Origen 
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Add canjes
     *
     * @param \Backend\AdminBundle\Entity\Canje $canjes
     * @return Producto
     */
    public function addCanje(\Backend\AdminBundle\Entity\Canje $canjes)
    {
        $this->canjes[] = $canjes;
    
        return $this;
    }

    /**
     * Remove canjes
     *
     * @param \Backend\AdminBundle\Entity\Canje $canjes
     */
    public function removeCanje(\Backend\AdminBundle\Entity\Canje $canjes)
    {
        $this->canjes->removeElement($canjes);
    }

    /**
     * Get canjes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCanjes()
    {
        return $this->canjes;
    }
}
