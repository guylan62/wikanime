<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity", par "@ORM\Entity(repositoryClass= "App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="category_label", type="string", length=25, nullable=false)
     */
    private $categoryLabel;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Anime", inversedBy="idCategory")
     * @ORM\JoinTable(name="categorize",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_category", referencedColumnName="id_category")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_anime", referencedColumnName="id_anime")
     *   }
     * )
     */
    private $idAnime;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idAnime = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdCategory(): ?int
    {
        return $this->idCategory;
    }

    public function getCategoryLabel(): ?string
    {
        return $this->categoryLabel;
    }

    public function setCategoryLabel(string $categoryLabel): self
    {
        $this->categoryLabel = $categoryLabel;

        return $this;
    }

    /**
     * @return Collection|Anime[]
     */
    public function getIdAnime(): Collection
    {
        return $this->idAnime;
    }

    public function addIdAnime(Anime $idAnime): self
    {
        if (!$this->idAnime->contains($idAnime)) {
            $this->idAnime[] = $idAnime;
        }

        return $this;
    }

    public function removeIdAnime(Anime $idAnime): self
    {
        $this->idAnime->removeElement($idAnime);

        return $this;
    }

}
