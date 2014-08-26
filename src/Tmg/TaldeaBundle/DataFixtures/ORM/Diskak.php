<?php
namespace Tmg\TaldeaBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tmg\TaldeaBundle\Entity\Diska;
class Diskak implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $diskak = array
        (
            array('izena' => 'Garage´s hits', 'data' => new \DateTime(), 'iraupena' => '20:05', 'disketxea' => 'Autofinantzatua'),
            array('izena' => 'Nazkagarrien aurka', 'data' => new \DateTime(), 'iraupena' => '38:45', 'disketxea' => 'Autofinantzatua')
        );
        foreach ($diskak as $diska)
        {
            $entitate = new Diska();
            $entitate->setIzena($diska['izena']);
            $entitate->setData($diska['data']);
            $entitate->setIraupena($diska['iraupena']);
            $entitate->setDisketxea($diska['disketxea']);

            $manager->persist($entitate);
        }
        $manager->flush();
    }
}