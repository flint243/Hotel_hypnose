<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class MainController extends AbstractController
{
        #[Route('/', name: 'Accueil')]
        public function homepage(AuthenticationUtils $authenticationUtils): Response
        {
            // get the login error if there is one
         $error = $authenticationUtils->getLastAuthenticationError();

         // last username entered by the user
         $lastUsername = $authenticationUtils->getLastUsername();

            return $this->render('main/homepage.html.twig', [
                'last_username' => $lastUsername,
                'error'         => $error,
            ]);
            
        }

    
     #[Route("/logout", name: "app_logout")]
     
     public function logout(): Response
     {
        header('refresh:1, /Accueil');
             return $this->render('main/logout.html.twig');
     }

     #[Route("/bye", name: "app_bye")]
    public function bye(): Response
    {
            //header('refresh:1, /Accueil');
            return $this->render('main/homepage.html.twig');
    }

}