<?php

namespace Gsb\AppliFraisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FicheType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('nbJustificatifs')
            ->add('dateModification')
            ->add('montantValide')
            ->add('employe')
            ->add('etat')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gsb\AppliFraisBundle\Entity\Fiche'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gsb_applifraisbundle_fiche';
    }
}
