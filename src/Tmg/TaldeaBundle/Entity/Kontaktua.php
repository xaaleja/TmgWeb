<?php
namespace Tmg\TaldeaBundle\Entity;
//use Doctrine\ORM\Mapping as ORM;

use Tmg\TaldeaBundle\Util\Util;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\MaxLength;
use Symfony\Component\Validator\Constraints\MinLength;

/**
 */
class Kontaktua
{
    protected $izena;
    protected $emaila;
    protected $gaia;
    protected $mezua;

    public function getIzena()
    {
        return $this->izena;
    }

    public function setIzena($izena)
    {
        $this->izena = $izena;
    }
    public function getEmaila()
    {
        return $this->emaila;
    }

    public function setEmaila($emaila)
    {
        $this->emaila = $emaila;
    }
    public function getGaia()
    {
        return $this->gaia;
    }

    public function setGaia($gaia)
    {
        $this->gaia = $gaia;
    }
    public function getMezua()
    {
        return $this->mezua;
    }

    public function setMezua($mezua)
    {
        $this->mezua = $mezua;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('izena', new NotBlank());

        $metadata->addPropertyConstraint('emaila', new Email());

        $metadata->addPropertyConstraint('gaia', new NotBlank());
        //$metadata->addPropertyConstraint('gaia', new MaxLength(50));

        //$metadata->addPropertyConstraint('mezua', new MinLength(50));
    }
}