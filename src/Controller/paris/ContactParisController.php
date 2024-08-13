<?php

namespace App\Controller\paris;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactParisController extends AbstractController
{
        #[Route('/paris/contact')]
        public function Contact_Paris(): Response
        {
            return $this->render('paris/contactParis.html.twig');
        }

}