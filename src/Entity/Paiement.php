<?php

namespace App\Entity;

use App\Repository\PaiementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: PaiementRepository::class)]
#[Broadcast]
class Paiement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_Paiement = null;

    #[ORM\Column(length: 4)]
    private ?int $Montant_Paiement = null;

    #[ORM\Column(length: 8)]
    private ?int $Date_Paiement = null;

    #[ORM\Column(length: 8)]
    private ?int $Moyen_Paiement = null;

    #[ORM\Column]
    private ?int $id_Réservation_Paiement = null;

    #[ORM\Column]
    private ?int $Réservation_id = null;

    public function getId_Paiement(): ?int
    {
        return $this->id_Paiement;
    }

    public function getMontant_Paiement(): ?int
    {
        return $this->Montant_Paiement;
    }

    public function getDate_Paiement(): ?int
    {
        return $this->Date_Paiement;
    }

    public function getMoyen_Paiement(): ?int
    {
        return $this->Moyen_Paiement;
    }

    public function getId_Réservation_Paiement(): ?int
    {
        return $this->id_Réservation_Paiement;
    }

    public function getRéseravation_id(): ?int
    {
        return $this->Réservation_id;
    }
}
