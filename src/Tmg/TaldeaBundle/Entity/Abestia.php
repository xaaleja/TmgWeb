<?php
namespace Tmg\TaldeaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

use Tmg\TaldeaBundle\Util\Util;


/**
 * @ORM\Entity(repositoryClass="Tmg\TaldeaBundle\Entity\AbestiaRepository")
 */
class Abestia
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    private $id;

    /** @ORM\Column(type="string", length=100) */
    private $izena;

    /** @ORM\Column(type="string", length=100) */
    private $slug;

    /** @ORM\Column(type="string", length=10) */
    private $iraupena;

    /** @ORM\Column(type="text") */
    private $letra;


    /**
     * @ORM\ManyToMany(targetEntity="Tmg\TaldeaBundle\Entity\Diska", inversedBy="abestiak", cascade={"remove"})
     * @ORM\JoinTable(name="abestia_diska")
     */
    //private $diskak;

    public function __construct()
    {
        //$this->diskak = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getIzena()
    {
        return $this->izena;
    }

    public function setIzena($izena)
    {
        $this->izena = $izena;
        $this->slug = Util::getSlug($izena);
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function getIraupena()
    {
        return $this->iraupena;
    }

    public function setIraupena($iraupena)
    {
        $this->iraupena = $iraupena;
    }

     public function getLetra()
    {
        return $this->letra;
    }

    public function setLetra($letra)
    {
        $this->letra = $letra;
    }

    /*public function getDiskak()
    {
        return $this->diskak;
    }

    public function setDiskak($diskak)
    {
        $this->diskak = $diskak;
    }*/


}