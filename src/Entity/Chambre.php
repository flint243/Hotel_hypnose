<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ChambreRepository::class)]
#[Broadcast]
class Chambre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $Id_Chambre = null;

    #[ORM\Column(length: 3)]
    private ?int $Numéro_Chambre = null;

    #[ORM\Column(length: 1)]
    private ?int $Type_Chambre = null;

    #[ORM\Column(length: 4)]
    private ?int $Tarif_Chambre = null;

    #[ORM\Column]
    private ?int $Id_Hotel_Chambre = null;

    #[ORM\Column]
    private ?int $Réservation_id = null;

    public function getId_Chambre(): ?int
    {
        return $this->Id_Chambre;
    }

    public function getNumero_Chambre(): ?int
    {
        return $this->Numéro_Chambre;
    }

    public function getType_Chambre(): ?int
    {
        return $this->Type_Chambre;
    }

    public function getTarif_Chambre(): ?int
    {
        return $this->Tarif_Chambre;
    }

    public function getId_Hotel_Chambre(): ?int
    {
        return $this->Id_Hotel_Chambre;
    }

    public function getRéservation_Id(): ?int
    {
        return $this->Réservation_id;
    }
}
