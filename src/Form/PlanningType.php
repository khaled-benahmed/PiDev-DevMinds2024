<?php

namespace App\Form;

use App\Entity\Planning;
use App\Entity\Activite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use DateTime;


class PlanningType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Titre', TextType::class, [
                'required' => true,
                'attr' => ['placeholder' => 'Entrez le titre du planning']
            ])
            ->add('datePlanning', DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['min' => (new DateTime())->format('Y-m-d')],
            ])
            ->add('jourPlanning', ChoiceType::class, [
                'choices' => [
                    'Lundi' => 'Lundi',
                    'Mardi' => 'Mardi',
                    'Mercredi' => 'Mercredi',
                    'Jeudi' => 'Jeudi',
                    'Vendredi' => 'Vendredi',
                    'Samedi' => 'Samedi',
                    'Dimanche' => 'Dimanche',
                ],
                'placeholder' => 'Veuillez choisir le jour.',
            ])
            ->add('startTime', TimeType::class, [
                'widget' => 'choice',
                'input'  => 'datetime',
                'html5' => true,
                'placeholder' => [
                    'hour' => 'Heure', 'minute' => 'Minute'
                ],
            ])
            ->add('endTime', TimeType::class, [
                'widget' => 'choice',
                'input'  => 'datetime',
                'html5' => true,
                'placeholder' => [
                    'hour' => 'Heure', 'minute' => 'Minute'
                ],
            ])

            ->add('activities', EntityType::class, [
                'class' => Activite::class,
                'choice_label' => function (Activite $activite) {
                    return sprintf('%s (%d minutes)', $activite->getNomActivite(), $activite->getDureeActivite());
                },
                'expanded' => true,
                'multiple' => true,
                'by_reference' => false,
                'placeholder' => 'Veuillez choisir les activités.',
            ])

        // Ajout du champ 'status' avec des options prédéfinies
        ->add('status', ChoiceType::class, [
            'choices' => [
                'Publié' => 'publie',
                'En cours' => 'en_cours',
                'Complété' => 'complete',
                'Annulé' => 'annule',
            ],
            'placeholder' => 'Sélectionnez le statut du planning',
            'required' => true,
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Planning::class,
        ]);
    }
}
