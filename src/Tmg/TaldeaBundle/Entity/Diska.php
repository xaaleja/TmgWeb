<?php
namespace Tmg\TaldeaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Tmg\TaldeaBundle\Util\Util;


/**
 * @ORM\Table(name="diska")
 * @ORM\Entity(repositoryClass="Tmg\TaldeaBundle\Entity\DiskaRepository")
 */
class Diska
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

    /** @ORM\Column(type="date") */
    private $data;

    /** @ORM\Column(type="string", length=10) */
    private $iraupena;

    /** @ORM\Column(type="string", length=100) */
    private $disketxea;

    /** @ORM\Column(type="text") */
    private $testua;

    /**
     * @ORM\OneToMany(targetEntity="Argazkia", mappedBy="diska", cascade={"remove"})
     * @ORM\JoinColumn(name="id", referencedColumnName="diska", onDelete="CASCADE")
     */
    private $argazkiak;

     /**
     * @ORM\ManyToMany(targetEntity="Tmg\TaldeaBundle\Entity\Abestia", mappedBy="diskak")
     */
    //private $abestiak;

    public function __construct()
    {
       //$this->abestiak = new ArrayCollection();
       $this->argazkiak = new ArrayCollection();
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

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getIraupena()
    {
        return $this->iraupena;
    }

    public function setIraupena($iraupena)
    {
        $this->iraupena = $iraupena;
    }

    public function getDisketxea()
    {
        return $this->disketxea;
    }

    public function setDisketxea($disketxea)
    {
        $this->disketxea = $disketxea;
    }

    public function getArgazkiak()
    {
        return $this->argazkiak;
    }

    public function setArgazkiak($argazkiak)
    {
        $this->argazkiak = $argazkiak;
    }

    public function getTestua()
    {
        return $this->testua;
    }

    public function setTestua($testua)
    {
        $this->testua = $testua;
    }


    /*public function getAbestiak()
    {
        return $this->abestiak;
    }

    public function setAbestiak($abestiak)
    {
        $this->abestiak = $abestiak;
    }*/

}