<?php

namespace App\Form;

use App\Entity\ReservationHotel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationHotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('email')
            ->add('country')
            ->add('hotel')
            ->add('checkIn', null, [
                'widget' => 'single_text',
            ])
            ->add('checkOut', null, [
                'widget' => 'single_text',
            ])
            ->add('comfort')
            ->add('adults')
            ->add('rooms')
            ->add('children')
            ->add('message')
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationHotel::class,
        ]);
    }
}
