<?php

namespace Tmg\TaldeaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class KontaktuaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('izena');
        $builder->add('emaila', 'email');
        $builder->add('gaia');
        $builder->add('mezua', 'textarea');
    }

    public function getName()
    {
        return 'kontaktua_form';
    }
}