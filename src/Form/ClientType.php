<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom_Client')
            ->add('Prénom_Client')
            ->add('Email_Client')
            ->add('Hotel_Client')
            ->add('Téléphone_Client')
            ->add('Adresse_Client')
            ->add('Checkin_Client')
            ->add('Checkout_Client')
            ->add('Confort_Client')
            ->add('Select_Client')
            ->add('Message_Client')
            ->add('CreatedAt')
            ->add('save', SubmitType::class, [
                'label' => 'Envoyer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
