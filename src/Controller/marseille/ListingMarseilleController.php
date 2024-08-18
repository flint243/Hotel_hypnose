<?php

namespace App\Controller\marseille;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListingMarseilleController extends AbstractController
{
        #[Route('/listing')]
        public function Listing_Marseilles(): Response
        {
            return $this->render('marseille/ListingMarseille.html.twig');
        }

}