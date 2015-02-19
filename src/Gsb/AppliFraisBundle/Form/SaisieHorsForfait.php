<?php

namespace Gsb\AppliFraisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SaisieHorsForfait extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Date', 'date');
        $builder->add('Description', 'text');
        $builder->add('Montant', 'money');
        $builder->add('créer', 'submit');
    }

    public function getName()
    {
        return 'gsb_saisie_hors_forfait';
    }
    
}