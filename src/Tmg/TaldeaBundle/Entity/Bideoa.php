<?php
namespace Tmg\TaldeaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

use Tmg\TaldeaBundle\Util\Util;


/**
 * @ORM\Entity(repositoryClass="Tmg\TaldeaBundle\Entity\BideoaRepository")
 */
class Bideoa
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    private $id;

    /** @ORM\Column(type="string", length=100) */
    private $esteka;

    /** @ORM\Column(type="string", length=100) */
    private $slug;

    /** @ORM\Column(type="text") */
    private $testua;


    public function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEsteka()
    {
        return $this->esteka;
    }

    public function setEsteka($esteka)
    {
        $this->esteka = $esteka;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function getTestua()
    {
        return $this->testua;
    }

    public function setTestua($testua)
    {
        $this->testua = $testua;
    }
}