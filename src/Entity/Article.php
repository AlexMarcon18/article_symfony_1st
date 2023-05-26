<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $titre_art = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content_aut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_art = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Auteur $auteur = null;

    #[ORM\ManyToMany(targetEntity: Categories::class, inversedBy: 'article')]
    private Collection $categories;

    #[ORM\Column(length: 50)]
    private ?string $slug = null;

    #[ORM\OneToMany(mappedBy: 'art_img', targetEntity: Images::class, orphanRemoval: true)]
    private Collection $images;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->images = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreArt(): ?string
    {
        return $this->titre_art;
    }

    public function setTitreArt(string $titre_art): self
    {
        $this->titre_art = $titre_art;

        return $this;
    }

    public function getContentAut(): ?string
    {
        return $this->content_aut;
    }

    public function setContentAut(string $content_aut): self
    {
        $this->content_aut = $content_aut;

        return $this;
    }

    public function getDateArt(): ?\DateTimeInterface
    {
        return $this->date_art;
    }

    public function setDateArt(\DateTimeInterface $date_art): self
    {
        $this->date_art = $date_art;

        return $this;
    }

    public function getAuteur(): ?Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(?Auteur $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * @return Collection<int, Categories>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categories $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
        }

        return $this;
    }

    public function removeCategory(Categories $category): self
    {
        $this->categories->removeElement($category);

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return Collection<int, Images>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Images $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images->add($image);
            $image->setArtImg($this);
        }

        return $this;
    }

    public function removeImage(Images $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getArtImg() === $this) {
                $image->setArtImg(null);
            }
        }

        return $this;
    }
}
