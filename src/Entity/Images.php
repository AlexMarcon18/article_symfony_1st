<?php

namespace App\Entity;

use App\Repository\ImagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImagesRepository::class)]
class Images
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $taille = null;

    #[ORM\Column(length: 20)]
    private ?string $type = null;

    #[ORM\Column(type: Types::BLOB)]
    private $bin = null;

    #[ORM\ManyToOne(inversedBy: 'images')]
    #[ORM\JoinColumn(nullable: false)]
    private ?article $art_img = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(int $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getBin()
    {
        return $this->bin;
    }

    public function setBin($bin): self
    {
        $this->bin = $bin;

        return $this;
    }

    public function getArtImg(): ?article
    {
        return $this->art_img;
    }

    public function setArtImg(?article $art_img): self
    {
        $this->art_img = $art_img;

        return $this;
    }
}
