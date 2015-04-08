<?php

namespace Gsb\AppliFraisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class majFiche extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('horsForfaitLignes', 'collection', array('type' => new majLigneHf()));
        $builder->add('forfaitLignes', 'collection', array('type' => new majLigneForfait()));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gsb\AppliFraisBundle\Entity\Fiche',
        ));
    }

    public function getName()
    {
        return 'gsb_maj_fiche';
    }
}