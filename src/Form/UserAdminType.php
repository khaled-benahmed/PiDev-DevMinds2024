<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType; 

class UserAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('firstname')
            ->add('lastname')
            ->add('city')
            ->add('speciality')
            ->add('birthday', DateType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'type' => 'date', 
                ],
                'label' => 'Birthday',
                'widget' => 'single_text',
                'html5' => true, 
            ])
            ->add('image')
            ->add('cin')
            ->add('isBlocked')
            ->add('isVerified')
            //->add('roles')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
