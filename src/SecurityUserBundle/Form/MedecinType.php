<?php


/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */

namespace SecurityUserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class MedecinType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('required' => true,
                      'attr' => array(
                          'placeholder' => '',
                          'class' => 'form-control',
                              'height'=>   '34px') ))

            ->add('adresse', TextType::class, array('required' => true,
                  'attr' => array(
                          'placeholder' => '',
                          'class' => 'form-control',
                              'height'=>   '34px') ))


            ->add('email', TextType::class, array('required' => true,
                 'attr' => array(
                          'placeholder' => '',
                          'class' => 'form-control',
                              'height'=>   '34px') ))


            ->add('telephone', TextType::class, array('required' => true,
                 'attr' => array(
                          'placeholder' => '',
                          'class' => 'form-control',
                              'height'=>   '34px') ))
            ->add('tarif', IntegerType::class, array('required' => true,
                   'attr' => array(
                          'placeholder' => '',
                          'class' => 'form-control',
                              'height'=>   '34px') ))


            ->add('modepaiments', 'entity', array('class' => 'BackBundle\Entity\ModePaiment',
                'property' => 'type',
                'expanded' => false,
                'multiple' => true,
                'required' => false,
                'attr' => array('class' => 'form-control', 'height'=>   '34px'),
            ))

            ->add('Specialite', 'entity', array('class' => 'SecurityUserBundle\Entity\Specialite',
                'property' => 'nomSpecialite',
                'expanded' => false,
                'multiple' => false,
                'required' => false,
                'attr' => array('class' => 'form-control', 'height'=>   '34px'),
            ))

       ->add('description', TextareaType::class, array('required' => true,
                   'attr' => array(
                          'placeholder' => '',
                          'class' => 'form-control',
                           'height'=>   ' 110px;'
                       ) ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SecurityUserBundle\Entity\Medecin',
        ));
    }

    public function getBlockPrefix()
    {
        return 'Medecin';
    }
}
