<?php
namespace Tmg\TaldeaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Tmg\TaldeaBundle\Util\Util;


/**
 * @ORM\Entity(repositoryClass="Tmg\TaldeaBundle\Entity\BerriaRepository")
 */
class Berria
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    private $id;

    /** @ORM\Column(type="text") */
    private $titularra;

    /** @ORM\Column(type="string", length=100) */
    private $slug;

    /** @ORM\Column(type="text") */
    private $testua;

    /** @ORM\Column(type="date") */
    private $data;

    /**
     * @ORM\OneToMany(targetEntity="Argazkia", mappedBy="berria", cascade={"remove"})
     * @ORM\JoinColumn(name="id", referencedColumnName="berria", onDelete="CASCADE")
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
    public function getTitularra()
    {
        return $this->titularra;
    }

    public function setTitularra($titularra)
    {
        $this->titularra = $titularra;
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

    public function getArgazkiak()
    {
        return $this->argazkiak;
    }

    public function setArgazkia($argazkiak)
    {
        $this->argazkiak = $argazkiak;
    }

}