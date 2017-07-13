<?php

/**
 * Created by PhpStorm.
 * User: MehrezLabidi
 * Date: 27/05/2017
 * Time: 11:56
 */

namespace SecurityUserBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', null, array('required' => true,
                    'attr' => array(
                    'placeholder' => 'Saisissez votre adresse mail',
                    'class' => 'form-control','maxlength'=>'100',
        )));
        
        $builder->add('username', null, array('required' => true,
                    'attr' => array(
                    'placeholder' => 'Saisissez votre nom d\'utilisateur login',
                    'class' => 'form-control','maxlength'=>'100',
        )));
           
        $builder->add('plainPassword', 'repeated', array(
                 
                    'type' => 'password',
                    'options' => array('translation_domain' => 'FOSUserBundle'),
                    'first_options' => array('label' => 'password', 'label' => false,'attr'=>array('class' => 'form-control')),
                    'second_options' => array('label' => 'confirmation password', 'label' => false,'attr'=>array('class' => 'form-control')),
                    'invalid_message' => 'fos_user.password.mismatch',
                 ));
        
        $builder->add('telephone', null, array('required' => true,
                    'attr' => array(
                    'placeholder' => 'Portable',
                    'class' => 'form-control',
               
                    'maxlength'=>'10',
        )));
        
        $builder->add('datenaissance', 'date', array(
            'years' => range(date('Y') - 80, date('Y') - 15)
           )
        );
        
        
        $builder->add('genre', 'choice', array(
            'choices' => array('m' => 'Homme', 'f' => 'Femme'),
            'expanded' => true,
            'multiple' => false
        ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
