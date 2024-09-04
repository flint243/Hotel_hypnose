<?php

namespace App\Controller;

use App\Entity\User;
use App\Security\EmailVerifier;
use App\Service\SendEmailService;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Symfony\Component\Mime\Address;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    public function __construct(private EmailVerifier $emailVerifier, private UserRepository $userRepository, private SendEmailService $sendEmailService, private EntityManagerInterface $em)
    {
        $this->emailVerifier = $emailVerifier;
        $this->sendEmailService = $sendEmailService;
        $this->em = $em;
        $this->userRepository = $userRepository;
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $user->setToken($this->generateToken());

            $this->em->persist($user);
            $this->em->flush();
            $this->sendEmailService->Send($user->__toString(), $user->getToken());
            $this->addFlash("messageSuccess", "Un e-mail de confirmation vient de vous etre envoyé");

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('dd1acbe483d449@smtp.mailtrap.io', 'Mail'))
                    ->to($user->__toString())
                    ->subject('Confirmez votre Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );

            // do anything else you need here, like send an email

            return $this->redirectToRoute('Accueil');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }

    //#[Route('/confirmer-mon-compte/{token}', name: 'confirme_compte')]
#[Route('/verifier-email/{token}', name: 'app_verify_email')]
public function confirmEmail(string $token): RedirectResponse
{
    $user = $this->userRepository->findOneBy(['token' => $token]);

    if (!$user || !$this->isTokenValid($user)) {
        $this->addFlash('error', "Ce compte n'existe pas ou le lien est expiré !");
        return $this->redirectToRoute('accueil');
    }

    // Invalider le token après confirmation
    $user->setToken(null);
    $user->setIsVerified(true);
    $this->em->persist($user);
    $this->em->flush();

    $this->addFlash('message', 'Compte activé !');
    return $this->redirectToRoute('accueil');
}

private function isTokenValid(User $user): bool
{
    $tokenCreatedAt = $user->getTokenCreatedAt();
    $expiryDate = (new \DateTime())->modify('-1 day'); // Expiration après 24h

    return $tokenCreatedAt >= $expiryDate;
}


    /**
     * @return string
     * @throws \Exception
     */
    private function generateToken(): string
    {
        return bin2hex(random_bytes(32));
    }
}

