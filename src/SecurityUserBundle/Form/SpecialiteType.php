<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace SecurityUserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SpecialiteType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('file', 'file', array('required' => false))
                ->add('nomSpecialite', TextType::class, array('required' => true,
                    'attr' => array(
                        'placeholder' => '',
                        'class' => 'form-control',
                    // ,'style' => 'width:10%;'
                    ),
                ))

         ->add('raisonvisites', 'entity', array('class' => 'SecurityUserBundle\Entity\RaisonVisite',
                'property' => 'raison',
                'expanded' => false,
                'multiple' => true,
                'required' => false,
                'attr' => array('class' => 'form-control', 'height'=>   '34px'),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'SecurityUserBundle\Entity\Specialite',
        ));
    }

    public function getBlockPrefix() {
        return 'Specialite';
    }

}
