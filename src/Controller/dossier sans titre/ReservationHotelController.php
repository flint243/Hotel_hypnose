<?php

namespace App\Controller;

use App\Entity\ReservationHotel;
use App\Form\ReservationHotelType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReservationHotelController extends AbstractController
{
    #[Route('/paris', name: 'app_reservation_hotel')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $reservationHotel = new ReservationHotel();
        $form = $this->createForm(ReservationHotelType::class, $reservationHotel);
            $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $reservationHotel->setCreatedAt(new \DateTimeImmutable());

            // but, the original `$task` variable has also been updated
            $reservationHotel = $form->getData();

            $entityManager->persist($reservationHotel);
            $entityManager->flush();

            $this->addFlash('messageContact', 'Votre hôtel a bien été réservé !');
            //return $this->redirectToRoute('Accueil');
        }

        return $this->render('paris/accueilParis.html.twig', [
            //'controller_name' => 'ReservationHotelController',
            'reservationHotelForm' => $form->createView(),
        ]);
    }
}
