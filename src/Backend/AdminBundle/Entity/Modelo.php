<?php 
namespace Backend\AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="modelo")
 * @ORM\Entity()
 */
class Modelo
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(name="name", type="string", length=100)
     */
    public $name;
    /**
     * @ORM\Column(name="nameManufacture", type="string", length=100)
     */
    public $nameManufacture;
            
     /**
     * @ORM\Column(name="is_legacy", type="boolean",nullable=true)
     */
        
    public $isLegacy;
        
     /**
     * @ORM\Column(name="is_delete", type="boolean" )
     */
    
    private $isDelete;
    
    /**
     * @ORM\ManyToOne(targetEntity="Clasificacion", inversedBy="modelos")
     * @ORM\JoinColumn(name="clasificacion_id", referencedColumnName="id")
     */
        
    private $clasificacion;
    
    /**
     * @ORM\OneToMany(targetEntity="Producto", mappedBy="modelo")
     */

    protected $productos;
      
    /**
     * @ORM\OneToMany(targetEntity="Canje", mappedBy="modelo")
     */

    protected $canjes;  
    
    
    
	public function __construct()
    {
        $this->productos = new ArrayCollection();
        $this->isDelete=false;
        $this->isLegacy = false;
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
     * @return Modelo
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
     * Set nameManufacture
     *
     * @param string $nameManufacture
     * @return Modelo
     */
    public function setNameManufacture($nameManufacture)
    {
        $this->nameManufacture = $nameManufacture;
    
        return $this;
    }

    /**
     * Get nameManufacture
     *
     * @return string 
     */
    public function getNameManufacture()
    {
        return $this->nameManufacture;
    }

    /**
     * Set isDelete
     *
     * @param boolean $isDelete
     * @return Modelo
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
     * Set isLegacy
     *
     * @param boolean $isLegacy
     * @return Modelo
     */
    public function setIsLegacy($isLegacy)
    {
        $this->isLegacy = $isLegacy;
    
        return $this;
    }

    /**
     * Get isLegacy
     *
     * @return boolean 
     */
    public function getIsLegacy()
    {
        return $this->isLegacy;
    }

    /**
     * Add productos
     *
     * @param \Backend\AdminBundle\Entity\Producto $productos
     * @return Modelo
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
     * Set clasificacion
     *
     * @param \Backend\AdminBundle\Entity\Clasificacion $clasificacion
     * @return Modelo
     */
    public function setClasificacion(\Backend\AdminBundle\Entity\Clasificacion $clasificacion = null)
    {
        $this->clasificacion = $clasificacion;
    
        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return \Backend\AdminBundle\Entity\Clasificacion 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Add canjes
     *
     * @param \Backend\AdminBundle\Entity\Canje $canjes
     * @return Modelo
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