<?php

namespace App\Controller\paris;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListingParisController extends AbstractController
{
        #[Route('/listing')]
        public function Listing_Paris(): Response
        {
            return $this->render('paris/ListingParis.html.twig');
        }

}