<?php
namespace Tmg\TaldeaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

use Tmg\TaldeaBundle\Util\Util;


/**
 * @ORM\Entity(repositoryClass="Tmg\TaldeaBundle\Entity\AbestiaRepository")
 */
class AbestiaDiska
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Abestia")
     * @ORM\JoinColumn(name="abestiaId", referencedColumnName="id")
     */
    private $abestiaId;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Diska")
     * @ORM\JoinColumn(name="diskaId", referencedColumnName="id")
     */
    private $diskaId;

    /** @ORM\Column(type="integer") */
    private $pista;


    public function getAbestiaId()
    {
        return $this->abestiaId;
    }

    public function getDiskaId()
    {
        return $this->diskaId;
    }

    public function setPista($pista)
    {
        $this->pista = $pista;
    }

    public function getPista()
    {
        return $this->pista;
    }
}