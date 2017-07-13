<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class RendezvousType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('type', 'choice', array(
                    'choices' => array(
                        'NOUVELLE CONSULTATION' => 'NOUVELLE CONSULTATION',
                        'RENOUVELLEMENT TRAITEMENT' => 'RENOUVELLEMENT TRAITEMENT'
                    ),
                    'expanded' => false,
                    'multiple' => false,
                    'attr' => array(
                        'placeholder' => '',
                        'class' => 'form-control'
                    )
                ))
                    ->add('duree', IntegerType::class, array('required' => true,
                    'attr' => array('placeholder' => '', 'class' => 'form-control')))
                ->add('heure', IntegerType::class, array('required' => true,
                    'attr' => array('placeholder' => '', 'class' => 'form-control')))
                
                ->add('minute', IntegerType::class, array('required' => true,
                    'attr' => array('placeholder' => '', 'class' => 'form-control')))
                
                ->add('jour', IntegerType::class, array('required' => true,
                    'attr' => array('placeholder' => '', 'class' => 'form-control')))
                ->add('mois', 'choice', array(
                    'choices' => array(
                        'JANVIER' => 'JANVIER',
                        'FEVRIER' => 'FEVRIER',
                        'MARS' => 'MARS',
                        'AVRIL' => 'AVRIL',
                        'MAI' => 'MAI',
                        'JUIN' => 'JUIN',
                         'JUILLET' => 'JUILLET',
                        'AOUT' => 'AOUT',
                        'SEPTEMBRE' => 'SEPTEMBRE',
                        'OCTOBRE' => 'OCTOBRE',
                        'NOVEMBRE' => 'NOVEMBRE',
                        'DECEMBRE' => 'DECEMBRE'
                    ),
                    'expanded' => false,
                    'multiple' => false,
                    'attr' => array(
                        'placeholder' => '',
                        'class' => 'form-control'
                    )
                ))
                ->add('annee', IntegerType::class, array('required' => true,
                    'attr' => array(
                        'placeholder' => '',
                        'class' => 'form-control'
                    ),
                ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackBundle\Entity\Rendezvous',
        ));
    }

    public function getBlockPrefix()
    {
        return 'Rendezvous';
    }
}
