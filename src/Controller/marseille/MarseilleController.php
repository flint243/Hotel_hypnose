<?php

namespace App\Controller\marseille;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MarseilleController extends AbstractController
{
        #[Route('/marseille')]
        public function accueilMarseille(): Response
        {
            return $this->render('marseille/accueilMarseille.html.twig');
        }

}