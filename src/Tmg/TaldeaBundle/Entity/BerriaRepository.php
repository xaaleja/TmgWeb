<?php
namespace Tmg\TaldeaBundle\Entity;
use Doctrine\ORM\EntityRepository;

class BerriaRepository extends EntityRepository
{
    public function findPortada()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $kontsulta = $em->createQuery('
        SELECT b FROM TaldeaBundle:Berria b
        ORDER BY b.data');
        $kontsulta->setMaxResults(20);
        $kontsulta->setFirstResult(10);
        $berria = $kontsulta->getResult();
    }
}