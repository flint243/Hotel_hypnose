<?php

namespace App\Controller\marseilles;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListingMarseillesController extends AbstractController
{
        #[Route('/listing')]
        public function Listing_Marseilles(): Response
        {
            return $this->render('marseilles/ListingMarseilles.html.twig');
        }

}