<?php

namespace Gsb\AppliFraisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SaisieForfait extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbKm')
            ->add('nbEtape')
            ->add('nbNuit')
            ->add('nbRepas')
            ->add('statut')
            ->add('fiche')
        ;
    }

    public function getName()
    {
        return 'gsb_saisie_forfait';
    }
    
}