<?php

namespace App\Controller\lyon;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LyonController extends AbstractController
{
        #[Route('/lyon')]
        public function accueilLyon(): Response
        {
            return $this->render('lyon/accueilLyon.html.twig');
        }

}