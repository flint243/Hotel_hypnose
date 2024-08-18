<?php

namespace App\Controller\lyon;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogLyonController extends AbstractController
{
        #[Route('/lyon/blog')]
        public function Blog_Lyon(): Response
        {
            return $this->render('lyon/blogLyon.html.twig');
        }

}