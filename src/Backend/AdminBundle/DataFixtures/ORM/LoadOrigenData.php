<?php 

namespace Backend\AdminBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Backend\AdminBundle\Entity\Origen;

class LoadOrigenData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $seteoOrigen = new Origen();
        $seteoOrigen->setName('Stock de Red Propia Equipos Ex. LUP');
        $seteoOrigen->setCreatedAt(new \DateTime('now'));
        $manager->persist($seteoOrigen);
        $manager->flush();
        $this->addReference('origen-lup', $seteoOrigen);
        
        $seteoOrigen = new Origen();
        $seteoOrigen->setName('Stock de Nuevos equipos BIG BANG');
        $seteoOrigen->setCreatedAt(new \DateTime('now'));
        $manager->persist($seteoOrigen);
        $manager->flush();
        $this->addReference('origen-bigbang', $seteoOrigen);
        
        $seteoOrigen = new Origen();
        $seteoOrigen->setName('Stock Re-asignado');
        $seteoOrigen->setCreatedAt(new \DateTime('now'));
        $manager->persist($seteoOrigen);
        $manager->flush();
        $this->addReference('origen-reasignado', $seteoOrigen);                
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
