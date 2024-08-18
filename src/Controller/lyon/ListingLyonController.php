<?php

namespace App\Controller\lyon;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListingLyonController extends AbstractController
{
        #[Route('/lyon/listing')]
        public function Listing_Lyon(): Response
        {
            return $this->render('lyon/ListingLyon.html.twig');
        }

}