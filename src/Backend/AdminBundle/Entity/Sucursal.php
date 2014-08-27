<?php

namespace Backend\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="sucursal")
 * @ORM\Entity()
 */

class Sucursal
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    
    private $id;

    /**
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @ORM\Column(name="responsable", type="string", length=100,nullable=true)
     */

    private $responsable;

    /**
     * @ORM\Column(name="calle", type="string", length=100,nullable=true)
     */
   
    private $calle;

    /**
     * @ORM\Column(name="numero", type="integer",nullable=true)
     */

    private $numero;

    /**
     * @ORM\Column(name="piso", type="integer",nullable=true)
     */    

    private $piso;

    /**
     * @ORM\Column(name="cp", type="string", length=100,nullable=true)
     */
    
    private $cp;

     /**
     * @ORM\Column(name="telefono", type="string", length=100,nullable=true)
     */

    private $telefono;

    /**
     * @ORM\Column(name="fax", type="string", length=100, nullable=true,nullable=true) 
     */   
    
    private $fax;

    /**
     * @ORM\Column(name="email", type="string", length=100, nullable=true) 
     */
    private $email;
    
    /**
     * @ORM\Column(name="tipo", type="string", length=100, nullable=true) 
     */
    private $tipo;
    
    /**
     * @ORM\Column(name="mdoiden", type="string", length=100, nullable=true) 
     */
    private $mdoiden;
    
    /**
     * @ORM\Column(name="nivel", type="string", length=100, nullable=true) 
     */
    private $nivel;
           
	/**
     * @ORM\Column(name="carriers", type="string", length=100, nullable=true) 
     */
    private $carriers;

	/**
     * @ORM\Column(name="masc", type="string", length=100, nullable=true) 
     */
    private $masc;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
            
    private $createdAt;

    /**
     * @ORM\Column(name="modified_at", type="datetime",nullable=true)
     */
    
    private $modifiedAt;
    
     /**
     * @ORM\OneToMany(targetEntity="\Backend\UserBundle\Entity\User", mappedBy="sucursal")
     */
     private $usuarios;

    /**
     * @ORM\Column(name="is_delete", type="boolean" )
     */
    
    private $isDelete;
    

     /**
     * @ORM\ManyToOne(targetEntity="\Backend\AdminBundle\Entity\Centro", inversedBy="sucursales")
     * @ORM\JoinColumn(name="centro_id", referencedColumnName="id")
     */
     private $centro;
    

    /**
     * @ORM\OneToMany(targetEntity="Producto", mappedBy="sucursal")
     */

    protected $productos; 
    
    /**
     * @ORM\OneToMany(targetEntity="Canje", mappedBy="sucursal")
     */

    protected $canjes;     

     /**
     * @ORM\ManyToOne(targetEntity="\Backend\AdminBundle\Entity\Pais", inversedBy="sucursals")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     */
    public $pais;
     /**
     * @ORM\ManyToOne(targetEntity="\Backend\AdminBundle\Entity\Provincia", inversedBy="sucursals")
     * @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     */
    public $provincia;
    
     /**
     * @ORM\ManyToOne(targetEntity="\Backend\AdminBundle\Entity\Zona", inversedBy="sucursals")
     * @ORM\JoinColumn(name="zona_id", referencedColumnName="id")
     */
    public $zona;
    
    /**
     * Constructor
     */
    public function __construct()
    {

        $this->usuarios = new ArrayCollection();
        $this->productos = new ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Sucursal
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     * @return Sucursal
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    
        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set calle
     *
     * @param string $calle
     * @return Sucursal
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;
    
        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Sucursal
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set piso
     *
     * @param integer $piso
     * @return Sucursal
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;
    
        return $this;
    }

    /**
     * Get piso
     *
     * @return integer 
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Sucursal
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    
        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Sucursal
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Sucursal
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Sucursal
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
     * @return Sucursal
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
     * Set centro
     *
     * @param \Backend\AdminBundle\Entity\Centro $centro
     * @return Sucursal
     */
    public function setCentro(\Backend\AdminBundle\Entity\Centro $centro = null)
    {
        $this->centro = $centro;
    
        return $this;
    }

    /**
     * Get centro
     *
     * @return \Backend\AdminBundle\Entity\Centro 
     */
    public function getCentro()
    {
        return $this->centro;
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
     * Add usuarios
     *
     * @param \Backend\UserBundle\Entity\User $usuarios
     * @return Sucursal
     */
    public function addUsuario(\Backend\UserBundle\Entity\User $usuarios)
    {
        $this->usuarios[] = $usuarios;
	}

     /**
     * Add productos
     *
     * @param \Backend\AdminBundle\Entity\Producto $productos
     * @return Sucursal
     */
    public function addProducto(\Backend\AdminBundle\Entity\Producto $productos)
    {
        $this->productos[] = $productos;
   
        return $this;
    }

    /**
     * Remove usuarios
     *
     * @param \Backend\UserBundle\Entity\User $usuarios
     */
    public function removeUsuario(\Backend\UserBundle\Entity\User $usuarios)
    {
        $this->usuarios->removeElement($usuarios);
    }

    /**
     * Get usuarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
        
     /*
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
     * Add canjes
     *
     * @param \Backend\AdminBundle\Entity\Canje $canjes
     * @return Sucursal
     */
    public function addCanje(\Backend\AdminBundle\Entity\Canje $canjes)
    {
        $this->canjes[] = $canjes;
 
        return $this;
    }
    
     /*
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

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Sucursal
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set mdoiden
     *
     * @param string $mdoiden
     * @return Sucursal
     */
    public function setMdoiden($mdoiden)
    {
        $this->mdoiden = $mdoiden;
    
        return $this;
    }

    /**
     * Get mdoiden
     *
     * @return string 
     */
    public function getMdoiden()
    {
        return $this->mdoiden;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     * @return Sucursal
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    
        return $this;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set carriers
     *
     * @param string $carriers
     * @return Sucursal
     */
    public function setCarriers($carriers)
    {
        $this->carriers = $carriers;
    
        return $this;
    }

    /**
     * Get carriers
     *
     * @return string 
     */
    public function getCarriers()
    {
        return $this->carriers;
    }

    /**
     * Set masc
     *
     * @param string $masc
     * @return Sucursal
     */
    public function setMasc($masc)
    {
        $this->masc = $masc;
    
        return $this;
    }

    /**
     * Get masc
     *
     * @return string 
     */
    public function getMasc()
    {
        return $this->masc;
    }

    /**
     * Set pais
     *
     * @param \Backend\AdminBundle\Entity\Pais $pais
     * @return Sucursal
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
     * Set provincia
     *
     * @param \Backend\AdminBundle\Entity\Provincia $provincia
     * @return Sucursal
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
     * Set zona
     *
     * @param \Backend\AdminBundle\Entity\Zona $zona
     * @return Sucursal
     */
    public function setZona(\Backend\AdminBundle\Entity\Zona $zona = null)
    {
        $this->zona = $zona;
    
        return $this;
    }

    /**
     * Get zona
     *
     * @return \Backend\AdminBundle\Entity\Zona 
     */
    public function getZona()
    {
        return $this->zona;
    }
}