<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
        #[Route('/contact', name: 'Contact')]
        public function contact(EntityManagerInterface $entityManager, Request $request): Response
        {
            $contact = new Contact();
            $form = $this->createForm(ContactType::class, $contact);
            $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // but, the original `$task` variable has also been updated
            $contact = $form->getData();

            $entityManager->persist($contact);
            $entityManager->flush();

            $this->addFlash('messageContact', 'Votre message a bien été posté !');
            return $this->redirectToRoute('Accueil');
        }
            
            return $this->render('main/contact.html.twig', [
                'contactForm' => $form->createView(),
            ]);
        }

}