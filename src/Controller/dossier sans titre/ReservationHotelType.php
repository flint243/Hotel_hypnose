<?php

namespace App\Form;

use App\Entity\ReservationHotel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ReservationHotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom'
                ]
            ])
            ->add('email', EmailType::class,[
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Email'
                ]
            ])
            ->add('country', TextType::class,[
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Pays'
                ]
            ])
            ->add('hotel', TextType::class,[
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Hotel'
                ]
            ])
            ->add('checkIn', DateTimeType::class)
            ->add('checkOut', DateTimeType::class)
            ->add('comfort', TextType::class)
            ->add('adults', NumberType::class)
            ->add('rooms', NumberType::class)
            ->add('children', NumberType::class)
            ->add('message', TextareaType::class,[
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Message'
                ]
            ])
            ->add('envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationHotel::class,
        ]);
    }
}
