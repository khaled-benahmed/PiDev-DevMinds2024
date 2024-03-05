<?php

namespace App\Form;
use App\Entity\Allergie;
use App\Entity\Plat;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PlatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextareaType::class, [
                'label' => 'Nom du plat',
                'attr' => ['placeholder' => 'Entrez le nom du plat', 'class' => 'form-control']
            ])
            ->add('allergies', EntityType::class, [
                'class' => 'App\Entity\Allergie',
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => false, // or false if you want a dropdown
            ])
            ->add('calories', ChoiceType::class, [
                'label' => 'Calories',
                'choices' => [
                    '0' => '0',
                    '0-400' => '0-400',
                    '400-800' => '400-800',
                    '800-1200' => '800-1200',
                    '1200-2000' => '1200-2000',
                    '2000 et plus' => '2000 et plus'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner une option pour les calories.',
                    ]),
                    new Callback([$this, 'validateCalories']),
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('prix', ChoiceType::class, [
                'label' => 'Prix',
                'choices' => [
                    '0dt' => '0dt',
                    '20-40dt' => '20-40dt',
                    '40-100dt' => '40-100dt',
                    'plus100dt' => 'plus100dt'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner une option pour le prix.',
                    ]),
                    new Callback([$this, 'validatePrix']),
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('image', FileType::class, [
                'label' => 'Image (obligatoire)',
                'data_class' => null,
                'required' => false,
                'attr' => ['class' => 'form-control-file']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Plat::class,
        ]);
    }

    public function validateCalories($value, ExecutionContextInterface $context)
    {
        if ($value === '0') {
            $context->buildViolation('Veuillez sélectionner une option valide pour les calories.')
                ->addViolation();
        }
    }

    public function validatePrix($value, ExecutionContextInterface $context)
    {
        if ($value === '0dt') {
            $context->buildViolation('Veuillez sélectionner une option valide pour le prix.')
                ->addViolation();
        }
    }
}
