<?php

namespace App\Entity;

use App\Repository\HotelRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: HotelRepository::class)]
#[Broadcast]
class Hotel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_Hotel = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom_Hotel = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse_Hotel = null;

    #[ORM\Column(length: 5)]
    private ?int $Nombre_Etoiles_Hotel = null;

    #[ORM\Column(length: 15)]
    private ?int $Téléphone_Hotel = null;

    public function getId(): ?int
    {
        return $this->id_Hotel;
    }

    public function getNom(): ?string
    {
        return $this->Nom_Hotel;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse_Hotel;
    }

    public function getNombre_Etoiles(): ?int
    {
        return $this->Nombre_Etoiles_Hotel;
    }

    public function getTelephone(): ?int
    {
        return $this->Téléphone_Hotel;
    }
}
