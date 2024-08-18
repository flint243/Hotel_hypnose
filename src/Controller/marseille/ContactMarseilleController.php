<?php

namespace App\Controller\marseille;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactMarseilleController extends AbstractController
{
        #[Route('/marseille/contact')]
        public function Contact_Marseille(): Response
        {
            return $this->render('marseille/contactMarseille.html.twig');
        }

}