<?php

namespace App\Controller\nice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactNiceController extends AbstractController
{
        #[Route('/contact')]
        public function Contact_Nice(): Response
        {
            return $this->render('nice/contactNice.html.twig');
        }

}