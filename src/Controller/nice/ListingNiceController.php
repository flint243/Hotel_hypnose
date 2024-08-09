<?php

namespace App\Controller\nice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListingNiceController extends AbstractController
{
        #[Route('/listing')]
        public function Listing_Nice(): Response
        {
            return $this->render('nice/ListingNice.html.twig');
        }

}