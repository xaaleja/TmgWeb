<?php
namespace Tmg\TaldeaBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tmg\TaldeaBundle\Entity\Argazkia;
class Argazkiak implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $argazkiak = array
        (
        array('argazkia' => 'nazkagarrienAurka.jpg', 'testua' => 'Nazkagarrien Aurka diskaren karatula', 'data' => new \DateTime()
                ),
        array('argazkia' => 'sara1.jpg', 'testua' => 'Saran emandako kontzertuaren argazkia', 'data' => new \DateTime()
                )    );
        foreach ($argazkiak as $argazkia)
        {
            $entitate = new Argazkia();
            $entitate->setArgazkia($argazkia['argazkia']);
            $entitate->setTestua($argazkia['testua']);
            $entitate->setData($argazkia['data']);

            $manager->persist($entitate);
        }
        $manager->flush();
    }
}