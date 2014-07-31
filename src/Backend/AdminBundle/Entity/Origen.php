<?php

namespace Backend\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="origen")
 * @ORM\Entity()
 */

class Origen
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
     * @ORM\Column(name="is_delete", type="boolean" )
     */
    
    private $isDelete;
    
    /**
     * @ORM\OneToMany(targetEntity="Producto", mappedBy="origen")
     */

    protected $productos;  
    
     /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    
    private $createdAt;

    /**
     * @ORM\Column(name="modified_at", type="datetime",nullable=true)
     */
    
    private $modifiedAt;

    /**
     * Constructor
     */
    public function __construct()
    {
        
        $this->productos = new ArrayCollection();
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
     * Set isDelete
     *
     * @param boolean $isDelete
     * @return Origen
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
     * Add productos
     *
     * @param \Backend\AdminBundle\Entity\Producto $productos
     * @return Origen
     */
    public function addProducto(\Backend\AdminBundle\Entity\Producto $productos)
    {
        $this->productos[] = $productos;
    
        return $this;
    }

    /**
     * Remove productos
     *
     * @param \Backend\AdminBundle\Entity\Producto $productos
     */
    public function removeProducto(\Backend\AdminBundle\Entity\Producto $productos)
    {
        $this->productos->removeElement($productos);
    }

    /**
     * Get productos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductos()
    {
        return $this->productos;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Origen
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
     * @return Origen
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
     * Set name
     *
     * @param string $name
     * @return Origen
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
}