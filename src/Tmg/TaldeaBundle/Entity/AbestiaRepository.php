<?php
namespace Tmg\TaldeaBundle\Entity;
use Doctrine\ORM\EntityRepository;

class AbestiaRepository extends EntityRepository
{
    public function findDiskarenAbestiak($id)
    {
        $em = $this->getEntityManager();
        $kontsulta = $em->createQuery('
        SELECT a FROM TaldeaBundle:Abestia a, TaldeaBundle:AbestiaDiska ad
        WHERE a.id = ad.abestiaId AND ad.diskaId = :id
        ORDER BY ad.pista');
        $kontsulta->setParameter('id', $id);
        return $kontsulta->getResult();
    }
}