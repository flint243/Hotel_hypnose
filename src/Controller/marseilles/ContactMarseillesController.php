<?php

namespace App\Controller\marseilles;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactMarseillesController extends AbstractController
{
        #[Route('/contact')]
        public function Contact_Marseilles(): Response
        {
            return $this->render('marseilles/contactMarseilles.html.twig');
        }

}