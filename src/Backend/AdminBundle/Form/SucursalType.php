<?php

namespace Backend\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\SecurityContext;
class SucursalType extends AbstractType
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
            ->add('nombre')
            ->add('responsable')
            ->add('calle')
            ->add('numero')
            ->add('piso')
            ->add('cp')
            ->add('telefono')
            ->add('fax')
            ->add('email')
            ->add('tipo')
            ->add('mdoiden')
            ->add('nivel')
            ->add('carriers')
            ->add('masc')
            ->add('centro','entity',array(
                'class'=>'BackendAdminBundle:Centro',
                'query_builder' => function(EntityRepository $er) use($security){
                 if ($security->isGranted('ROLE_CENTRO'))
               {
                 $usuario=$security->getToken()->getUser()->getId();
                 return $er->createQueryBuilder('u')
                        ->join("u.usuarios ","s") 
                        ->where('u.isDelete = :delete')
                        ->andWhere('s.id = :user')
                         ->setParameter('delete',false)
                         ->setParameter("user",$usuario)
                         ->orderBy('u.name', 'ASC');
               }
               else{
                return $er->createQueryBuilder('u')
                        ->where('u.isDelete = :delete')
                         ->setParameter('delete',false)
                         ->orderBy('u.nombre', 'ASC');
                }         
            },
                'property'=>'nombre',
                'multiple'=>false, //un solo deposito por operario
            ));
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Backend\AdminBundle\Entity\Sucursal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backend_adminbundle_sucursal';
    }
}
