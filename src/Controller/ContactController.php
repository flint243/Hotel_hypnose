<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
        #[Route('/contact')]
        public function contact(): Response
        {
            return $this->render('main/contact.html.twig');
        }

}