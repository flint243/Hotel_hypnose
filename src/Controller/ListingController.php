<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListingController extends AbstractController
{
        #[Route('/listing', name: 'Listing')]
        public function listing(): Response
        {
            return $this->render('main/listing.html.twig');
        }

}