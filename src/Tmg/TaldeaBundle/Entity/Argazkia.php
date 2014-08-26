<?php
namespace Tmg\TaldeaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Tmg\TaldeaBundle\Util\Util;


/**
 * @ORM\Entity(repositoryClass="Tmg\TaldeaBundle\Entity\ArgazkiaRepository")
 */
class Argazkia
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    private $id;

    /** @ORM\Column(type="string") */
    private $argazkia;

    /** @ORM\Column(type="string", length=100) */
    private $slug;

    /** @ORM\Column(type="text") */
    private $testua;

    /** @ORM\Column(type="date") */
    private $data;

    /**
     * @ORM\ManyToOne(targetEntity="Kontzertua", inversedBy="argazkiak")
     * @ORM\JoinColumn(name="kontzertua", referencedColumnName="id")
     */
    private $kontzertua;

    /**
     * @ORM\ManyToOne(targetEntity="Berria", inversedBy="argazkiak")
     * @ORM\JoinColumn(name="berria", referencedColumnName="id")
     */
    private $berria;

    /**
     * @ORM\ManyToOne(targetEntity="Diska", inversedBy="argazkiak")
     * @ORM\JoinColumn(name="diska", referencedColumnName="id")
     */
    private $diska;

    public function getId()
    {
        return $this->id;
    }

    public function getArgazkia()
    {
        return $this->argazkia;
    }

    public function setArgazkia($argazkia)
    {
        $this->argazkia = $argazkia;
        $this->slug = Util::getSlug($argazkia);
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

     public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

}