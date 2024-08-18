<?php

namespace App\Controller\bordeaux;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactBordeauxController extends AbstractController
{
        #[Route('/bordeaux/contact')]
        public function Contact_bordeaux(): Response
        {
            return $this->render('bordeaux/contactBordeaux.html.twig');
        }

}