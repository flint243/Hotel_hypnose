<?php

namespace App\Controller\paris;

use App\Entity\ReservationHotel;
use App\Form\ReservationHotelType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ParisController extends AbstractController
{
        #[Route('/paris')]
        public function accueilParis(Request $request, EntityManagerInterface $entityManager): Response
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

            return $this->redirectToRoute('Accueil');
        }

            return $this->render('paris/accueilParis.html.twig', [
                'reservationHotelForm' => $form->createView(),
            ]);
        }

}