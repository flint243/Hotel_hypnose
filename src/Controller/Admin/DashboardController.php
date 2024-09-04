<?php
// src/Controller/Admin/DashboardController.php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Contact;
use App\Entity\Paiement;
use App\Entity\ReservationHotel;
use App\Repository\UserRepository;
use App\Repository\PaiementRepository;
use App\Repository\ContactRepository;
use App\Repository\ReservationHotelRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;


class DashboardController extends AbstractDashboardController
{

    private $userRepository;
    private $reservationRepository;
    private $paiementRepository;
    private $contactRepository;

    public function __construct(UserRepository $userRepository, ReservationHotelRepository $reservationHotelRepository, PaiementRepository $paiementRepository, ContactRepository $contactRepository)
    {
        $this->userRepository = $userRepository;
        $this->reservationRepository = $reservationHotelRepository;
        $this->paiementRepository = $paiementRepository;
        $this->contactRepository = $contactRepository;
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('bundles/EasyAdminBundle/welcome.html.twig', [

        'countAllUser' => $this->userRepository->countAllUser(),
        'countAllReservation' => $this->reservationRepository->countAllReservation(),
        'countAllPaiement' => $this->paiementRepository->countAllPaiement(),
        'countAllContact' => $this->contactRepository->countAllContact()

        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Hôtel hypnose');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToUrl('Accueil', 'fas fa-home', $this->generateUrl('Accueil'));
        yield MenuItem::linkToCrud('Users', 'fa fa-user', User::class);
        yield MenuItem::linkToCrud('ReservationHotel', 'fa fa-user', ReservationHotel::class);
        yield MenuItem::linkToCrud('Paiement', 'fa fa-user', Paiement::class);
        yield MenuItem::linkToCrud('Contact', 'fa fa-contact', Contact::class);
        // Ajoutez d'autres éléments de menu ici pour d'autres entités
    }
}
