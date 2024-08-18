<?php

namespace App\Controller\marseille;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogMarseilleController extends AbstractController
{
        #[Route('marseille/blog')]
        public function BlogMarseille(): Response
        {
            return $this->render('marseille/BlogMarseille.html.twig');
        }

}