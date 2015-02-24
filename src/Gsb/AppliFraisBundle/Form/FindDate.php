<?php

namespace Gsb\AppliFraisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use \DateTime;

class FindDate extends AbstractType
{   
    public function __construct($options) {
        $this->options = $options;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        $builder
            ->add('debut', 'date', array(
                'data' => $this->options['date']))
            ->add('fin', 'date', array(
                'data' => new DateTime() ))
        ;
    }



    public function getName()
    {
        return 'gsb_connexion';
    }
}
