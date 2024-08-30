<?php
namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;


class SendEmailService
{
    public function __construct(private MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }
    public function send($email, $token): void 
    {
        //créer le mail
        $email = (new TemplatedEmail())
        ->from('from@example.com')
            ->to(new Address($email))
            ->subject('Validez votre inscription')
            ->htmlTemplate('registration/confirmation_email.html.twig')
            ->context(['token' => $token,]);
        $this->mailer->send($email);
    }

    public function forgotEmail($email, $token, $url)
    {
        $email = (new TemplatedEmail())
            ->from('forgot_pass@example.com')
            ->to(new Address($email))
            ->subject('Réinitialisation mot de passe')
            ->htmlTemplate('forgot_pass/email_forgot_pass.html.twig')
            ->context([
                'token' => $token,
                'url' => $url,
            ]);

        $this->mailer->send($email, $token);
    }
}