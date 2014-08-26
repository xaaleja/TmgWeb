<?php
namespace Tmg\TaldeaBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tmg\TaldeaBundle\Entity\Abestia;
class Abestiak implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $abestiak = array
        (
        array('izena' => 'Begbie, Frank', 'iraupena' => '4:30', 'letra' => 'Edinburgoko kaleetan gizon harro bat bereizten da',
                ),
        array('izena' => 'Zu gabe', 'iraupena' => '3:30', 'letra' => 'Erotasun mundu ilunean murgilduta nago jadanik',
                )    );
        foreach ($abestiak as $abestia)
        {
            $entitate = new Abestia();
            $entitate->setIzena($abestia['izena']);
            $entitate->setIraupena($abestia['iraupena']);
            $entitate->setLetra($abestia['letra']);

            $manager->persist($entitate);
        }
        $manager->flush();
    }
}