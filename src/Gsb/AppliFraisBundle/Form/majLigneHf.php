<?php

namespace Gsb\AppliFraisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class majLigneHf extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('statut')
            ->add('motif')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gsb\AppliFraisBundle\Entity\HorsForfaitLigne',
        ));
    }

    public function getName()
    {
        return 'gsb_maj_ligne';
    }
    
}