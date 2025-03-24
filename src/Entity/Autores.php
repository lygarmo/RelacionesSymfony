<?php

namespace App\Entity;

use App\Repository\AutoresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AutoresRepository::class)]
class Autores
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nombre = null;

    // Relación de 1 a 1 con la entidad Libro
    #[ORM\OneToOne(targetEntity: Libro::class, mappedBy: 'autor')]
    private ?Libro $libro = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getLibro(): ?Libro
    {
        return $this->libro;
    }

    public function setLibro(Libro $libro): static
    {
        $this->libro = $libro;

        return $this;
    }
}
