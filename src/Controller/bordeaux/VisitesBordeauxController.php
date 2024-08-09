<?php

namespace App\Controller\bordeaux;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VisitesBordeauxController extends AbstractController
{
        #[Route('/visites')]
        public function visite_Bordeaux(): Response
        {
            return $this->render('bordeaux/visitesBordeaux.html.twig');
        }

}