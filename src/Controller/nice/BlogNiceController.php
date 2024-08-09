<?php

namespace App\Controller\nice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogNiceController extends AbstractController
{
        #[Route('/blog')]
        public function BlogNice(): Response
        {
            return $this->render('nice/blogNice.html.twig');
        }

}