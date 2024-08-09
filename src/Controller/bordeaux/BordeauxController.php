<?php

namespace App\Controller\bordeaux;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BordeauxController extends AbstractController
{
        #[Route('/bordeaux')]
        public function accueilbordeaux(): Response
        {
            return $this->render('bordeaux/accueilBordeaux.html.twig');
        }

}