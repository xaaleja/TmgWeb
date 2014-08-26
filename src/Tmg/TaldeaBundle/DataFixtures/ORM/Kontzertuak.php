<?php
namespace Tmg\TaldeaBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tmg\TaldeaBundle\Entity\Kontzertua;
class Kontzertuak implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $kontzertuak = array
        (
        array('izena' => 'San Bizenteko jaiak', 'lekua' => 'San Bizente (Barakaldo)', 'data' => new \DateTime(), 'ordua' => '23:00', 'besteTaldeak' => 'Manifa',
                'esteka' => 'www.google.es', 'sarrera' => 0
                ),
        array('izena' => 'Manchester Antifa Festival', 'lekua' => 'Manchester', 'data' => new \DateTime(), 'ordua' => '20:00', 'besteTaldeak' => 'Angelic Upstarts',
                'esteka' => 'www.google.es', 'sarrera' => 40
                )    );
        foreach ($kontzertuak as $kontzertua)
        {
            $entitate = new Kontzertua();
            $entitate->setIzena($kontzertua['izena']);
            $entitate->setLekua($kontzertua['lekua']);
            $entitate->setData($kontzertua['data']);
            $entitate->setOrdua($kontzertua['ordua']);
            $entitate->setBesteTaldeak($kontzertua['besteTaldeak']);
            $entitate->setEsteka($kontzertua['esteka']);
            $entitate->setSarrera($kontzertua['sarrera']);

            $manager->persist($entitate);
        }
        $manager->flush();
    }
}