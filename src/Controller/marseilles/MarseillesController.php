<?php

namespace App\Controller\marseilles;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MarseillesController extends AbstractController
{
        #[Route('/marseilles')]
        public function accueilMarseilles(): Response
        {
            return $this->render('marseilles/accueilMarseilles.html.twig');
        }

}