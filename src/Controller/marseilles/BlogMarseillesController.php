<?php

namespace App\Controller\marseilles;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogMarseillesController extends AbstractController
{
        #[Route('marseilles/blog')]
        public function BlogMarseilles(): Response
        {
            return $this->render('marseilles/blogMarseilles.html.twig');
        }

}