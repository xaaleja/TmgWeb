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

    public function find2014koKontzertuak()
    {
        $em = $this->getEntityManager();
        $kontsulta = $em->createQuery('
        SELECT k FROM TaldeaBundle:Kontzertua k
        WHERE k.data >= :lehenago AND k.data < :beranduago
        ORDER BY k.data DESC');
        $kontsulta->setParameter('lehenago', new \DateTime('2014-01-01'));
        $kontsulta->setParameter('beranduago', new \DateTime('2015-01-01'));
        return $kontsulta->getResult();
    }

    public function find2013koKontzertuak()
    {
        $em = $this->getEntityManager();
        $kontsulta = $em->createQuery('
        SELECT k FROM TaldeaBundle:Kontzertua k
        WHERE k.data >= :lehenago AND k.data < :beranduago
        ORDER BY k.data DESC');
        $kontsulta->setParameter('lehenago', new \DateTime('2013-01-01'));
        $kontsulta->setParameter('beranduago', new \DateTime('2014-01-01'));
        return $kontsulta->getResult();
    }
    public function find2012koKontzertuak()
    {
        $em = $this->getEntityManager();
        $kontsulta = $em->createQuery('
        SELECT k FROM TaldeaBundle:Kontzertua k
        WHERE k.data >= :lehenago AND k.data < :beranduago
        ORDER BY k.data DESC');
        $kontsulta->setParameter('lehenago', new \DateTime('2012-01-01'));
        $kontsulta->setParameter('beranduago', new \DateTime('2013-01-01'));
        return $kontsulta->getResult();
    }
    public function find2011koKontzertuak()
    {
        $em = $this->getEntityManager();
        $kontsulta = $em->createQuery('
        SELECT k FROM TaldeaBundle:Kontzertua k
        WHERE k.data >= :lehenago AND k.data < :beranduago
        ORDER BY k.data DESC');
        $kontsulta->setParameter('lehenago', new \DateTime('2011-01-01'));
        $kontsulta->setParameter('beranduago', new \DateTime('2012-01-01'));
        return $kontsulta->getResult();
    }
}