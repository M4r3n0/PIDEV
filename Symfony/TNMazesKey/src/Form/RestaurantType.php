<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\Image;


class RestaurantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'label' => 'Nom du restaurant: ',
                'constraints' => [
                    new NotBlank(),
                    new Length(['max' => 255]),
                ],
            ])
            ->add('adresse', null, ['label' => 'Adresse: '])
            ->add('menu', FileType::class, [
                'label' => 'Menu: ',
                'required' => false,
                'constraints' => [
                    new Image(['maxSize' => '5M']),
                ],

            ])
            ->add('prog', null, ['label' => 'Programme: '])
            ->add('telephone', null, [
                'label' => "Télephone:",
                'constraints' => [
                    new Regex('/^[0-9]*$/'),
                    new Length(['min' => 8, 'max' => 8]),
                    new Range(['min' => 20000000]),
                ],
            ])
            ->add('nbrep', null, [
                'label' => 'Nombre de places: ',
                'constraints' => [
                    new NotBlank(),
                    new Regex('/^[0-9]*$/'),
                    new Range(['min' => 1]),
                ],
            ]);
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
