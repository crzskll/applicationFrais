<?php

namespace Gsb\AppliFraisBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class majFiche extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('horsForfaitLignes', 'collection', array('type' => new majLigneHf()));
        $builder->add('forfaitLignes', 'collection', array('type' => new majLigneForfait()));
        $builder->add('etat', 'entity', array(
            'class' => 'GsbAppliFraisBundle:Etat',
                'property' => 'libelle',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('e')
                        ->where('e.libelle != :enCours')
                            ->setParameter('enCours', 'En cours');
                    }));
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