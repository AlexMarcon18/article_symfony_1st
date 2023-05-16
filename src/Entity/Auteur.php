<?php

namespace App\Entity;

use App\Repository\AuteurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuteurRepository::class)]
class Auteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $nom_aut = null;

    #[ORM\Column(length: 25)]
    private ?string $prenom_aut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_aut = null;

    #[ORM\Column(length: 60)]
    private ?string $contact_aut = null;

    #[ORM\OneToMany(mappedBy: 'auteur', targetEntity: Article::class)]
    private Collection $articles;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAut(): ?string
    {
        return $this->nom_aut;
    }

    public function setNomAut(string $nom_aut): self
    {
        $this->nom_aut = $nom_aut;

        return $this;
    }

    public function getPrenomAut(): ?string
    {
        return $this->prenom_aut;
    }

    public function setPrenomAut(string $prenom_aut): self
    {
        $this->prenom_aut = $prenom_aut;

        return $this;
    }

    public function getDateAut(): ?\DateTimeInterface
    {
        return $this->date_aut;
    }

    public function setDateAut(\DateTimeInterface $date_aut): self
    {
        $this->date_aut = $date_aut;

        return $this;
    }

    public function getContactAut(): ?string
    {
        return $this->contact_aut;
    }

    public function setContactAut(string $contact_aut): self
    {
        $this->contact_aut = $contact_aut;

        return $this;
    }

    /**
     * @return Collection<int, Article>
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles->add($article);
            $article->setAuteur($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getAuteur() === $this) {
                $article->setAuteur(null);
            }
        }

        return $this;
    }
}
