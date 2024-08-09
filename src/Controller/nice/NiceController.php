<?php

namespace App\Controller\nice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NiceController extends AbstractController
{
        #[Route('/nice')]
        public function accueilNice(): Response
        {
            return $this->render('nice/accueilNice.html.twig');
        }

}