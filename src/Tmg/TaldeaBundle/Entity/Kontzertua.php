<?php
namespace Tmg\TaldeaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Tmg\TaldeaBundle\Util\Util;

/**
 * @ORM\Table(name="kontzertua")
 * @ORM\Entity(repositoryClass="Tmg\TaldeaBundle\Entity\KontzertuaRepository")
 */
class Kontzertua
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
    private $lekua;

    /** @ORM\Column(type="string", length=100) */
    private $slug;

    /** @ORM\Column(type="date") */
    private $data;

    /** @ORM\Column(type="string") */
    private $ordua;

    /** @ORM\Column(type="string", length=100) */
    private $besteTaldeak;

    /** @ORM\Column(type="string") */
    private $esteka;

    /** @ORM\Column(type="float") */
    private $sarrera;

    /**
     * @ORM\OneToMany(targetEntity="Argazkia", mappedBy="kontzertua", cascade={"remove"})
     * @ORM\JoinColumn(name="id", referencedColumnName="kontzertua", onDelete="CASCADE")
     */
    private $argazkiak;

    public function __construct()
    {
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

    public function getLekua()
    {
        return $this->lekua;
    }

    public function setLekua($lekua)
    {
        $this->lekua = $lekua;
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

    public function getOrdua()
    {
        return $this->ordua;
    }

    public function setOrdua($ordua)
    {
        $this->ordua = $ordua;
    }

    public function getBesteTaldeak()
    {
        return $this->besteTaldeak;
    }

    public function setBesteTaldeak($besteTaldeak)
    {
        $this->besteTaldeak = $besteTaldeak;
    }

    public function getEsteka()
    {
        return $this->esteka;
    }

    public function setEsteka($esteka)
    {
        $this->esteka = $esteka;
    }

    public function getSarrera()
    {
        return $this->sarrera;
    }

    public function setSarrera($sarrera)
    {
        $this->sarrera = $sarrera;
    }

    public function getArgazkiak()
    {
        return $this->argazkiak;
    }

    public function setArgazkiak($argazkiak)
    {
        $this->argazkiak = $argazkiak;
    }


}