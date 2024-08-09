<?php

namespace App\Controller\marseilles;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VisitesMarseillesController extends AbstractController
{
        #[Route('/visites')]
        public function visite_Marseilles(): Response
        {
            return $this->render('marseilles/visitesMarseilles.html.twig');
        }

}