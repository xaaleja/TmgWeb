<?php
namespace Tmg\TaldeaBundle\Entity;
use Doctrine\ORM\EntityRepository;

class KontzertuaRepository extends EntityRepository
{
    public function findIraganekoKontzertuak()
    {
        $em = $this->getEntityManager();
        $kontsulta = $em->createQuery('
        SELECT k FROM TaldeaBundle:Kontzertua k
        WHERE k.data < :gaur
        ORDER BY k.data DESC');
        $kontsulta->setParameter('gaur', new \DateTime());
        return $kontsulta->getResult();
    }

    public function findHurrengoKontzertuak()
    {
        $em = $this->getEntityManager();
        $kontsulta = $em->createQuery('
        SELECT k FROM TaldeaBundle:Kontzertua k
        WHERE k.data >= :gaur
        ORDER BY k.data');
        $kontsulta->setParameter('gaur', new \DateTime());
        return $kontsulta->getResult();
    }
}