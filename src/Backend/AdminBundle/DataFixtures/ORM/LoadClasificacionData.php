<?php 

namespace Backend\AdminBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Backend\UserBundle\Entity\Clasificacion;

class LoadClasificacionData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $seteoClasificacion = new Clasificacion();
        $seteoClasificacion->setName('Legacy for Bigbang');
        $seteoClasificacion->setCreatedAt(new \DateTime('now'));
        $manager->persist($seteoClasificacion);
        $manager->flush();
        $this->addReference('legacy-bigbang', $seteoClasificacion);
        
        $seteoClasificacion = new Clasificacion();
        $seteoClasificacion->setName('Legacy for Exceptcion');
        $seteoClasificacion->setCreatedAt(new \DateTime('now'));
        $manager->persist($seteoClasificacion);
        $manager->flush();
        $this->addReference('legacy-exception', $seteoClasificacion);       
                       
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
