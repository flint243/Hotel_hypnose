<?php

namespace App\MessageHandler;

use App\Message\Base\AsyncMessage;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Transport\Sender\SenderInterface;
use Symfony\Component\Mime\Email;

class NewUserWelcomeEmailHandler implements SenderInterface
{
    public function __construct(
        private MailerInterface $mailer,
        private string $email,
    ) {
    }

    public function send(Envelope $envelope): Envelope
    {
        $message = $envelope->getMessage();

        if (!$message instanceof NewUserWelcomeEmailHandler) {
            throw new \InvalidArgumentException(sprintf('This transport only supports "%s" messages.', NewUserWelcomeEmailHandler::class));
        }

        $this->mailer->send(
            (new Email())
                ->to($this->email)
                ->subject('Validez votre inscription')
                ->html('registration/confirmation_email.html.twig')
        );

        return $envelope;
    }
}