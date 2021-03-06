<?php 
namespace Backend\AdminBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManager;

class CuitUniqueValidator extends ConstraintValidator
{
    
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    
    
   public function validate($object, Constraint $constraint)
    {
       
     
     $code = $this->em->getRepository("BackendAdminBundle:Cliente")
                ->findOneBy(array("cuit"=>$object->getCuit(), "isDelete"=>false));
      
      if ($code != null)
      {
          if ($code->getId() == $object->getId())
             return true; //es el mismo objecto
          
          $this->context->addViolationAt("cuit",'Ya existe un cliente con el mismo CUIT!');
          return false;     
      }          
      else
        return true;
    
    
    
    }
}