<?php

namespace App\Controller\lyon;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VisitesLyonController extends AbstractController
{
        #[Route('/lyon/visites')]
        public function visite_Lyon(): Response
        {
            return $this->render('lyon/visitesLyon.html.twig');
        }

}