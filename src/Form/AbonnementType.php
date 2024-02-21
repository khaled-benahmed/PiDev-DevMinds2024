<?php

namespace App\Form;

use App\Entity\Abonnement;
use App\Entity\CategorieAbonnements;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_a')
            ->add('description_a')
            ->add('prix_a')
            ->add('date_debut_a')
            ->add('date_fin_a')
            ->add('CategorieAbonnements', EntityType::class, [
                'class' => CategorieAbonnements::class,
                'choice_label' => 'nom_categorie',
            ])
            ->add('Ajouter',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Abonnement::class,
        ]);
    }
}
