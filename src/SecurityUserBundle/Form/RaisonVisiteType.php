<?php

/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace SecurityUserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RaisonVisiteType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                
                ->add('raison', TextType::class, array('required' => true,
                    'attr' => array(
                        'placeholder' => '',
                        'class' => 'form-control',
                    // ,'style' => 'width:10%;'
                    ),
                ))


        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'SecurityUserBundle\Entity\RaisonVisite',
        ));
    }

    public function getBlockPrefix() {
        return 'RaisonVisite';
    }

}
