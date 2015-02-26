<?php

namespace Gsb\AppliFraisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ForfaitLigneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('statut')
            ->add('fiche')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gsb\AppliFraisBundle\Entity\ForfaitLigne'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gsb_applifraisbundle_forfaitligne';
    }
}
