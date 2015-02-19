<?php

namespace Gsb\AppliFraisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SaisieForfait extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Etapes', 'integer');
        $builder->add('Kilometres', 'integer');
        $builder->add('Nuits', 'integer');
        $builder->add('Repas', 'integer');
        $builder->add('rajouter', 'submit');
    }

    public function getName()
    {
        return 'gsb_saisie_forfait';
    }
    
}