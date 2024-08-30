<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
#[Broadcast]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_Client = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom_Client = null;

    #[ORM\Column(length: 255)]
    private ?string $Prénom_Client = null;

    #[ORM\Column(length: 255)]
    private ?string $Email_Client = null;

    #[ORM\Column(length: 255)]
    private ?string $Hotel_Client = null;

    #[ORM\Column(length: 15)]
    private ?int $Téléphone_Client = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse_Client = null;

    #[ORM\Column(length: 255)]
    private ?int $Checkin_Client = null;

    #[ORM\Column(length: 255)]
    private ?int $Checkout_Client = null;

    #[ORM\Column(length: 255)]
    private ?int $Confort_Client = null;

    #[ORM\Column(length: 255)]
    private ?int $Select_Client = null;

    #[ORM\Column(length: 255)]
    private ?string $Message_Client = null;

    public function getId_Client(): ?int
    {
        return $this->id_Client;
    }

    public function getNom_Client(): ?string
    {
        return $this->Nom_Client;
    }

    public function getPrenom_Client(): ?string
    {
        return $this->Prénom_Client;
    }

    public function getEmail_Client(): ?string
    {
        return $this->Email_Client;
    }

    public function getHotel_Client(): ?string
    {
        return $this->Hotel_Client;
    }

    public function getTelephone_Client(): ?int
    {
        return $this->Téléphone_Client;
    }

    public function getAdresse_Client(): ?string
    {
        return $this->Adresse_Client;
    }

    public function getCheckin_Client(): ?int
    {
        return $this->Checkin_Client;
    }

    public function getCheckout_Client(): ?int
    {
        return $this->Checkout_Client;
    }
    public function getConfort_Client(): ?string
    {
        return $this->Confort_Client;
    }
    public function getSelect_Client(): ?int
    {
        return $this->Select_Client;
    }
    public function getMessage_Client(): ?string
    {
        return $this->Message_Client;
    }
}
