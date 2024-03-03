<?php

namespace App\Form;

use App\Entity\Activite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Validator\Constraints\File;

class ActiviteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomActivite', TextType::class, [
                'attr' => ['placeholder' => 'Nom de l\'activité']
            ])
            ->add('dureeActivite', TextType::class, [
                'attr' => ['placeholder' => 'Durée de l\'activité (en minutes)']
            ])
            ->add('difficulteActivite', ChoiceType::class, [
                'choices' => [
                    'Facile' => 'Facile',
                    'Moyenne' => 'Moyenne',
                    'Difficile' => 'Difficile',
                ],
                'placeholder' => 'Choisir la difficulté de l\'activité',
            ])
            ->add('imageActivite',FileType::class,[
                'label' => 'Choisir une photo',
                'data_class' => null,
            ])
            // Retirez le champ 'cours', car il n'est plus nécessaire
            ->add('descriptionActivite', TextareaType::class, [
                'attr' => ['placeholder' => 'Description de l\'activité']
            ])
                       ->add('URLResources', UrlType::class, [
                           'required' => false,
                           'attr' => ['placeholder' => 'Entrez l\'URL des ressources associées'],
                           'label' => 'URL des Ressources'
                       ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activite::class,
        ]);
    }
}
