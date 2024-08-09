<?php

namespace App\Controller\paris;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ParisController extends AbstractController
{
        #[Route('/paris')]
        public function accueilParis(): Response
        {
            return $this->render('paris/accueilParis.html.twig');
        }

}