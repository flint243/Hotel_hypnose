<?php

namespace App\Controller\paris;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VisitesParisController extends AbstractController
{
        #[Route('/paris/visites')]
        public function visite_Paris(): Response
        {
            return $this->render('paris/visitesParis.html.twig');
        }

}