<?php

namespace Gsb\AppliFraisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use \DateTime;

class SaisieHorsForfait extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', 'date', 
                array('data' => new DateTime(),
                'format' => 'dd MMM yyyy', ))
            ->add('libelle')
            ->add('montant')
            ->add('statut')
            ->add('fiche')
        ;
    }

    public function getName()
    {
        return 'gsb_saisie_hors_forfait';
    }
    
}