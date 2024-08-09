<?php

namespace App\Controller\bordeaux;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogBordeauxController extends AbstractController
{
        #[Route('/blog')]
        public function Blog_bordeaux(): Response
        {
            return $this->render('bordeaux/blogBordeaux.html.twig');
        }

}