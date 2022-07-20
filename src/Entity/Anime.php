<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Anime
 *
 * @ORM\Table(name="anime", indexes={@ORM\Index(name="anime_type_FK", columns={"id_type"}), @ORM\Index(name="anime_kind0_FK", columns={"id_kind"}), @ORM\Index(name="anime_origin1_FK", columns={"id_origin"}), @ORM\Index(name="anime_progression2_FK", columns={"id_progression"})})
 * @ORM\Entity", par "@ORM\Entity(repositoryClass= "App\Repository\AnimeRepository")
 */
class Anime
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_anime", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnime;

    /**
     * @var string
     *
     * @ORM\Column(name="anime_label", type="string", length=120, nullable=false)
     */
    private $animeLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="anime_description", type="text", length=65535, nullable=false)
     */
    private $animeDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="anime_picture", type="string", length=255, nullable=false)
     */
    private $animePicture;

    /**
     * @var string
     *
     * @ORM\Column(name="anime_trailer", type="string", length=255, nullable=false)
     */
    private $animeTrailer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anime_year", type="date", nullable=false)
     */
    private $animeYear;

    /**
     * @var int|null
     *
     * @ORM\Column(name="anime_counter", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $animeCounter = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_valid", type="boolean", nullable=false)
     */
    private $isValid;

    /**
     * @var \Kind
     *
     * @ORM\ManyToOne(targetEntity="Kind")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_kind", referencedColumnName="id_kind")
     * })
     */
    private $idKind;

    /**
     * @var \Origin
     *
     * @ORM\ManyToOne(targetEntity="Origin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_origin", referencedColumnName="id_origin")
     * })
     */
    private $idOrigin;

    /**
     * @var \Progression
     *
     * @ORM\ManyToOne(targetEntity="Progression")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_progression", referencedColumnName="id_progression")
     * })
     */
    private $idProgression;

    /**
     * @var \Type
     *
     * @ORM\ManyToOne(targetEntity="Type")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type", referencedColumnName="id_type")
     * })
     */
    private $idType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Category", mappedBy="idAnime")
     */
    private $idCategory;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Adherent", inversedBy="idAnime")
     * @ORM\JoinTable(name="consult",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_anime", referencedColumnName="id_anime")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_adherent", referencedColumnName="id_adherent")
     *   }
     * )
     */
    private $idAdherent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCategory = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idAdherent = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdAnime(): ?int
    {
        return $this->idAnime;
    }

    public function getAnimeLabel(): ?string
    {
        return $this->animeLabel;
    }

    public function setAnimeLabel(string $animeLabel): self
    {
        $this->animeLabel = $animeLabel;

        return $this;
    }

    public function getAnimeDescription(): ?string
    {
        return $this->animeDescription;
    }

    public function setAnimeDescription(string $animeDescription): self
    {
        $this->animeDescription = $animeDescription;

        return $this;
    }

    public function getAnimePicture(): ?string
    {
        return $this->animePicture;
    }

    public function setAnimePicture(string $animePicture): self
    {
        $this->animePicture = $animePicture;

        return $this;
    }

    public function getAnimeTrailer(): ?string
    {
        return $this->animeTrailer;
    }

    public function setAnimeTrailer(string $animeTrailer): self
    {
        $this->animeTrailer = $animeTrailer;

        return $this;
    }

    public function getAnimeYear(): ?\DateTimeInterface
    {
        return $this->animeYear;
    }

    public function setAnimeYear(\DateTimeInterface $animeYear): self
    {
        $this->animeYear = $animeYear;

        return $this;
    }

    public function getAnimeCounter(): ?int
    {
        return $this->animeCounter;
    }

    public function setAnimeCounter(?int $animeCounter): self
    {
        $this->animeCounter = $animeCounter;

        return $this;
    }

    public function getIsValid(): ?bool
    {
        return $this->isValid;
    }

    public function setIsValid(bool $isValid): self
    {
        $this->isValid = $isValid;

        return $this;
    }

    public function getIdKind(): ?Kind
    {
        return $this->idKind;
    }

    public function setIdKind(?Kind $idKind): self
    {
        $this->idKind = $idKind;

        return $this;
    }

    public function getIdOrigin(): ?Origin
    {
        return $this->idOrigin;
    }

    public function setIdOrigin(?Origin $idOrigin): self
    {
        $this->idOrigin = $idOrigin;

        return $this;
    }

    public function getIdProgression(): ?Progression
    {
        return $this->idProgression;
    }

    public function setIdProgression(?Progression $idProgression): self
    {
        $this->idProgression = $idProgression;

        return $this;
    }

    public function getIdType(): ?Type
    {
        return $this->idType;
    }

    public function setIdType(?Type $idType): self
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getIdCategory(): Collection
    {
        return $this->idCategory;
    }

    public function addIdCategory(Category $idCategory): self
    {
        if (!$this->idCategory->contains($idCategory)) {
            $this->idCategory[] = $idCategory;
            $idCategory->addIdAnime($this);
        }

        return $this;
    }

    public function removeIdCategory(Category $idCategory): self
    {
        if ($this->idCategory->removeElement($idCategory)) {
            $idCategory->removeIdAnime($this);
        }

        return $this;
    }

    /**
     * @return Collection|Adherent[]
     */
    public function getIdAdherent(): Collection
    {
        return $this->idAdherent;
    }

    public function addIdAdherent(Adherent $idAdherent): self
    {
        if (!$this->idAdherent->contains($idAdherent)) {
            $this->idAdherent[] = $idAdherent;
        }

        return $this;
    }

    public function removeIdAdherent(Adherent $idAdherent): self
    {
        $this->idAdherent->removeElement($idAdherent);

        return $this;
    }

}
