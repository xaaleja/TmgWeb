<?php
namespace Tmg\TaldeaBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tmg\TaldeaBundle\Entity\Berria;
class Berriak implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $berriak = array
        (
        array('titularra' => 'Tommy Gun taldeak Manchesterren emango du kontzertua', 'testua' => 'Maiatzaren 2an joko dute punkaren hainbat talde mitikoekin',
            'data' => new \DateTime(), 'slug' => 'berria-1'
                ),
        array('titularra' => 'Tommy Gun bere lehen lana grabatu du', 'testua' => 'Urtebete ondoren badirudi diska aterako dutela Sabio MCaren eskutik',
            'data' => new \DateTime(), 'slug' => 'berria-2'
                )    );
        foreach ($berriak as $berria)
        {
            $entitate = new Berria();
            $entitate->setTitularra($berria['titularra']);
            $entitate->setTestua($berria['testua']);
            $entitate->setData($berria['data']);
            $entitate->setSlug($berria['slug']);

            $manager->persist($entitate);
        }
        $manager->flush();
    }
}