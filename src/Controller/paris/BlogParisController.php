<?php

namespace App\Controller\paris;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogParisController extends AbstractController
{
        #[Route('/blog')]
        public function BlogParis(): Response
        {
            return $this->render('paris/blogParis.html.twig');
        }

}