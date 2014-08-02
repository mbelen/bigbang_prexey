<?php

namespace Backend\AdminBundle\Form;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CanjeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sucursal','entity',array(
                'class'=>'BackendAdminBundle:Sucursal',
                'property'=>'nombre',
            ))
            ->add('imeiLegacy')
            ->add('imeiNuevo')
            ->add('modeloLegacy','entity',array(
                'class'=>'BackendAdminBundle:Modelo',
                'property'=>'name',
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
        return 'backend_adminbundle_modelo';
    }
}
