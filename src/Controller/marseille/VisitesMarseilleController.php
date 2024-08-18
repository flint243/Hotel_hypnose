<?php

namespace App\Controller\marseille;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VisitesMarseilleController extends AbstractController
{
        #[Route('/marseille/visites')]
        public function visite_Marseille(): Response
        {
            return $this->render('marseille/visitesMarseille.html.twig');
        }

}