<?php

namespace App\Form;

use App\Entity\Marque;
use App\Entity\Modele;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModeleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelle', TextType::class, [
                'label' => 'Modèle',
                'attr' => [
                    'placeholder' => 'Saisir le modèle'
                ]
            ])
            ->add('marque', EntityType::class, [
                'label' => 'Marque',
                'class' => Marque::class,
                'choice_label' => 'libelle',
                'placeholder' => 'Sélectionner la marque'
            ])
            // ->add('marque', ChoiceType::class, [
            //     'label' => 'Liste',
            //     'choices' => [
            //         'Audi' => 'Audi',
            //         'BMW' => 'BMW',
            //         'Mercedes' => 'Mercedes',
            //         'Peugeot' => 'Peugeot',
            //         'Renault' => 'Renault',
            //         'Volkswagen' => 'Volkswagen',
            //     ]

            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Modele::class,
        ]);
    }
}
