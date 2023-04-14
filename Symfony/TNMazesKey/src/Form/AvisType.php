<?php

namespace App\Form;

use App\Entity\Avis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('userId')
            ->add('note', ChoiceType::class, [

                'choices' => [
                    '          ✰'             => '0',
                    '          🌟               ' => '1',
                    '         🌟🌟             ' => '2',
                    '        🌟🌟🌟           ' => '3',
                    '       🌟🌟🌟🌟         ' => '4',
                    '      🌟🌟🌟🌟🌟       ' => '5',
                ],
            ]);
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}
