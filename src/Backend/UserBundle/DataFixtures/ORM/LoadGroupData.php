<?php 

namespace Backend\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Backend\UserBundle\Entity\Group;

class LoadGroupData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $groupAdmin = new Group();
        $groupAdmin->setName('Administrador de sistemas');
        $groupAdmin->setRole('ROLE_ADMIN');
        $groupAdmin->addAcceso($this->getReference('add-user'));
        $groupAdmin->addAcceso($this->getReference('mod-user'));
        $groupAdmin->addAcceso($this->getReference('del-user'));
        $groupAdmin->addAcceso($this->getReference('view-user'));
        $groupAdmin->addAcceso($this->getReference('seteos'));
        /*$groupAdmin->addAcceso($this->getReference('add-cliente'));
        $groupAdmin->addAcceso($this->getReference('mod-cliente'));
        $groupAdmin->addAcceso($this->getReference('del-cliente'));
        $groupAdmin->addAcceso($this->getReference('view-cliente'));*/
        $groupAdmin->addAcceso($this->getReference('add-sucursal'));
        $groupAdmin->addAcceso($this->getReference('mod-sucursal'));
        $groupAdmin->addAcceso($this->getReference('del-sucursal'));
        $groupAdmin->addAcceso($this->getReference('view-sucursal'));
        /*$groupAdmin->addAcceso($this->getReference('add-marca'));
        $groupAdmin->addAcceso($this->getReference('mod-marca'));
        $groupAdmin->addAcceso($this->getReference('del-marca'));
        $groupAdmin->addAcceso($this->getReference('view-marca'));*/
        $groupAdmin->addAcceso($this->getReference('add-modelo'));
        $groupAdmin->addAcceso($this->getReference('mod-modelo'));
        $groupAdmin->addAcceso($this->getReference('del-modelo'));
        $groupAdmin->addAcceso($this->getReference('view-modelo'));
        /*$groupAdmin->addAcceso($this->getReference('add-sintoma'));
        $groupAdmin->addAcceso($this->getReference('mod-sintoma'));
        $groupAdmin->addAcceso($this->getReference('del-sintoma'));
        $groupAdmin->addAcceso($this->getReference('view-sintoma'));*/
        $groupAdmin->addAcceso($this->getReference('add-provincia'));
        $groupAdmin->addAcceso($this->getReference('mod-provincia'));
        $groupAdmin->addAcceso($this->getReference('del-provincia'));
        $groupAdmin->addAcceso($this->getReference('view-provincia'));
        $groupAdmin->addAcceso($this->getReference('add-zona'));
        $groupAdmin->addAcceso($this->getReference('mod-zona'));
        $groupAdmin->addAcceso($this->getReference('del-zona'));
        $groupAdmin->addAcceso($this->getReference('view-zona'));
        /*$groupAdmin->addAcceso($this->getReference('add-articulo'));
        $groupAdmin->addAcceso($this->getReference('mod-articulo'));
        $groupAdmin->addAcceso($this->getReference('del-articulo'));
        $groupAdmin->addAcceso($this->getReference('view-articulo'));
        $groupAdmin->addAcceso($this->getReference('add-tipo-articulo'));
        $groupAdmin->addAcceso($this->getReference('mod-tipo-articulo'));
        $groupAdmin->addAcceso($this->getReference('del-tipo-articulo'));
        $groupAdmin->addAcceso($this->getReference('view-tipo-articulo'));*/
        
        $groupAdmin->addAcceso($this->getReference('add-centro'));
        $groupAdmin->addAcceso($this->getReference('mod-centro'));
        $groupAdmin->addAcceso($this->getReference('del-centro'));
        $groupAdmin->addAcceso($this->getReference('view-centro'));
        
        $groupAdmin->addAcceso($this->getReference('add-producto'));
        $groupAdmin->addAcceso($this->getReference('mod-producto'));
        $groupAdmin->addAcceso($this->getReference('del-producto'));
        $groupAdmin->addAcceso($this->getReference('view-producto'));
        $groupAdmin->addAcceso($this->getReference('add-canje'));
        
        $groupAdmin->addAcceso($this->getReference('del-canje'));
        $groupAdmin->addAcceso($this->getReference('view-canje'));
        
        $manager->persist($groupAdmin);
        $manager->flush();
        $this->addReference('admin-group', $groupAdmin);
        
        $groupAdmin1 = new Group();
        $groupAdmin1->setName('Centro');
        $groupAdmin1->setRole('ROLE_CENTRO');
        
        $groupAdmin1->addAcceso($this->getReference('add-canje'));
        $groupAdmin1->addAcceso($this->getReference('del-canje'));
        $groupAdmin1->addAcceso($this->getReference('view-canje'));
        
         
        $groupAdmin1->addAcceso($this->getReference('mod-sucursal'));
        
        $groupAdmin1->addAcceso($this->getReference('view-sucursal'));
        
        $groupAdmin1->addAcceso($this->getReference('add-producto'));
        $groupAdmin1->addAcceso($this->getReference('mod-producto'));
        $groupAdmin1->addAcceso($this->getReference('del-producto'));
        $groupAdmin1->addAcceso($this->getReference('view-producto'));
        
        $manager->persist($groupAdmin1);
        $manager->flush();
        $this->addReference('centro-group', $groupAdmin1);
        
        $groupAdmin2 = new Group();
        $groupAdmin2->setName('Sucursal');
        $groupAdmin2->setRole('ROLE_SUCURSAL');
        $groupAdmin2->addAcceso($this->getReference('add-canje'));
        $groupAdmin2->addAcceso($this->getReference('del-canje'));
        $groupAdmin2->addAcceso($this->getReference('view-canje'));
        $groupAdmin2->addAcceso($this->getReference('view-producto'));
        $manager->persist($groupAdmin2);
        $manager->flush();
        $this->addReference('sucursal-group', $groupAdmin2);
        
        
        $groupAdmin5 = new Group();
        $groupAdmin5->setName('Visitante');
        $groupAdmin5->setRole('ROLE_VISITOR');
        $manager->persist($groupAdmin5);
        $manager->flush();
        $this->addReference('visitor-group', $groupAdmin5);
        
        
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
