<?php

namespace App\Form;

use App\Entity\Blog;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du blog',
                'attr' => ['placeholder' => 'Entrez le nom du blog', 'class' => 'form-control']
            ])
            ->add('muscle', ChoiceType::class, [
                'choices' => [
                    'Aucun' => '', // Option vide
                    'Jambe' => 'jambe',
                    'Pectoraux' => 'pectoraux',
                    'Bras' => 'bras',
                    'Dos' => 'dos',
                    'Avant bras' => 'avant_bras',
                ],
                'placeholder' => 'Choisissez un muscle', // Texte de placeholder
                'required' => false, // Rendre le champ facultatif
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner une option valide pour le muscle.',
                    ]),
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Machine' => 'machine',
                    'Haltères' => 'halteres',
                ],
                'expanded' => true, // Afficher les boutons radio plutôt qu'une liste déroulante
                'multiple' => false, // Sélection unique
            ])
            ->add('duree', null, [
                'label' => 'Durée',
                'attr' => ['placeholder' => 'Entrez la durée du blog', 'class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir une durée.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Blog::class,
        ]);
    }
}
