<?php

namespace App\Controller\lyon;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactLyonController extends AbstractController
{
        #[Route('/contact')]
        public function Contact_Lyon(): Response
        {
            return $this->render('lyon/contactLyon.html.twig');
        }

}