<?php

namespace App\Form;

use App\Entity\Sponsor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Sponsor1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomSponsor')
            ->add('donnation')
            ->add('image', FileType::class, [
                'label' => 'Choose an image',
                // This allows the user to choose a file, but doesn't require it
                'required' => false,
                // This prevents the file from being persisted to the database directly
                'mapped' => false,
                // This will store the uploaded file path in the entity's image property
                // You may need to adjust the path based on your project's configuration
                'data_class' => null,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sponsor::class,
        ]);
    }
}
