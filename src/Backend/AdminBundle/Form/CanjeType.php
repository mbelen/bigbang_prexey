<?php

namespace Backend\AdminBundle\Form;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\SecurityContext;
class CanjeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */ 
     
       protected $security;
     
    public function __construct($security) 
    {
        $this->security = $security;
     
    }
                    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {    $security=$this->security;
        $builder
            ->add('sucursal','entity',array(
                'class'=>'BackendAdminBundle:Sucursal',
                'query_builder' => function(EntityRepository $er) use($security){
                 if ($security->isGranted('ROLE_CENTRO')  )
               {
                 $usuario=$security->getToken()->getUser()->getCentro()->getId();
                 return $er->createQueryBuilder('u')
                        ->join("u.centro ","s") 
                        ->where('u.isDelete = :delete')
                        ->andWhere('s.id = :id')
                         ->setParameter('delete',false)
                         ->setParameter("id",$usuario)
                         ->orderBy('u.nombre', 'ASC');
               }
               else{
                if ($security->isGranted('ROLE_SUCURSAL')){
                   $usuario=$security->getToken()->getUser()->getSucursal()->getId();
                   return $er->createQueryBuilder('u')
                        ->where('u.isDelete = :delete')
                        ->andWhere('u.id = :id')
                         ->setParameter('delete',false)
                         ->setParameter("id",$usuario)
                         ->orderBy('u.nombre', 'ASC');
                }else{
                    return $er->createQueryBuilder('u')
                            ->where('u.isDelete = :delete')
                             ->setParameter('delete',false)
                             ->orderBy('u.nombre', 'ASC');
                }
            }           
            },
                'property'=>'nombre',
                'multiple'=>false //un solo deposito por operario
            ))
            ->add('imeiLegacy')
            ->add('imeiNuevo')
             ->add('modeloLegacy','entity',array(
                'class'=>'BackendAdminBundle:Modelo',
                'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                        ->where('u.isDelete = :delete')
                         ->setParameter('delete',false)
                         ->orderBy('u.name', 'ASC');
                         
            },
                'property'=>'name',
                'multiple'=>false //un solo deposito por operario
            ))
            ->add('idNuevo','hidden')
            
            ;         
            
            
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Backend\AdminBundle\Entity\Canje'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backend_adminbundle_canje';
    }
}
