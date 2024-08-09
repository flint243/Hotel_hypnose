<?php

namespace App\Controller\bordeaux;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListingBordeauxController extends AbstractController
{
        #[Route('/listing')]
        public function Listing_Bordeaux(): Response
        {
            return $this->render('bordeaux/ListingBordeaux.html.twig');
        }

}