<?php

namespace App\Controller\nice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VisitesNiceController extends AbstractController
{
        #[Route('/nice/visites')]
        public function visite_Nice(): Response
        {
            return $this->render('nice/visitesNice.html.twig');
        }

}