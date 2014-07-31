<?php

namespace Backend\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imei')
            ->add('msn')
            ->add('isAvailable')
            ->add('sucursal','entity',array(
                'class'=>'BackendAdminBundle:Sucursal',
                'property'=>'nombre',
            ))
            ->add('modelo','entity',array(
                'class'=>'BackendAdminBundle:Modelo',
                'property'=>'name',
            ))
            ->add('origen','entity',array(
                'class'=>'BackendAdminBundle:Origen',
                'property'=>'name',
            ))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Backend\AdminBundle\Entity\Producto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backend_adminbundle_producto';
    }
}
