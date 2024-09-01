<?php

namespace App\Entity;

use App\Repository\ReservationHotelRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationHotelRepository::class)]
#[Broadcast]
class ReservationHotel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $country = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $hotel = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    #[Assert\NotBlank]
    #[Assert\Date]
    private ?\DateTimeImmutable $checkIn = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    #[Assert\NotBlank]
    #[Assert\Date]
    private ?\DateTimeImmutable $checkOut = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $comfort = null;

    #[ORM\Column(type: Types::INTEGER)]
    #[Assert\Positive]
    private ?int $adults = null;

    #[ORM\Column(type: Types::INTEGER)]
    #[Assert\Positive]
    private ?int $rooms = null;

    #[ORM\Column(type: Types::INTEGER)]
    #[Assert\PositiveOrZero]
    private ?int $children = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $message = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    // Getters and setters...

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;
        return $this;
    }

    public function getHotel(): ?string
    {
        return $this->hotel;
    }

    public function setHotel(string $hotel): self
    {
        $this->hotel = $hotel;
        return $this;
    }

    public function getCheckIn(): ?\DateTimeImmutable
    {
        return $this->checkIn;
    }

    public function setCheckIn(\DateTimeImmutable $checkIn): self
    {
        $this->checkIn = $checkIn;
        return $this;
    }

    public function getCheckOut(): ?\DateTimeImmutable
    {
        return $this->checkOut;
    }

    public function setCheckOut(\DateTimeImmutable $checkOut): self
    {
        $this->checkOut = $checkOut;
        return $this;
    }

    public function getComfort(): ?string
    {
        return $this->comfort;
    }

    public function setComfort(string $comfort): self
    {
        $this->comfort = $comfort;
        return $this;
    }

    public function getAdults(): ?int
    {
        return $this->adults;
    }

    public function setAdults(int $adults): self
    {
        $this->adults = $adults;
        return $this;
    }

    public function getRooms(): ?int
    {
        return $this->rooms;
    }

    public function setRooms(int $rooms): self
    {
        $this->rooms = $rooms;
        return $this;
    }

    public function getChildren(): ?int
    {
        return $this->children;
    }

    public function setChildren(int $children): self
    {
        $this->children = $children;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}
