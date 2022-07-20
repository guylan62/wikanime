<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Adherent
 *
 * @ORM\Table(name="adherent")
 * @ORM\Entity", par "@ORM\Entity(repositoryClass= "App\Repository\AdherentRepository")
 */
class Adherent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_adherent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdherent;

    /**
     * @var string
     *
     * @ORM\Column(name="adherent_last_name", type="string", length=50, nullable=false)
     */
    private $adherentLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="adherent_first_name", type="string", length=50, nullable=false)
     */
    private $adherentFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="adherent_email", type="string", length=255, nullable=false)
     */
    private $adherentEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="adherent_pseudo", type="string", length=30, nullable=false)
     */
    private $adherentPseudo;

    /**
     * @var int
     *
     * @ORM\Column(name="adherent_age", type="integer", nullable=false)
     */
    private $adherentAge;

    /**
     * @var string
     *
     * @ORM\Column(name="adherent_password", type="string", length=25, nullable=false)
     */
    private $adherentPassword;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_admin", type="boolean", nullable=false)
     */
    private $isAdmin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Anime", mappedBy="idAdherent")
     */
    private $idAnime;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idAnime = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdAdherent(): ?int
    {
        return $this->idAdherent;
    }

    public function getAdherentLastName(): ?string
    {
        return $this->adherentLastName;
    }

    public function setAdherentLastName(string $adherentLastName): self
    {
        $this->adherentLastName = $adherentLastName;

        return $this;
    }

    public function getAdherentFirstName(): ?string
    {
        return $this->adherentFirstName;
    }

    public function setAdherentFirstName(string $adherentFirstName): self
    {
        $this->adherentFirstName = $adherentFirstName;

        return $this;
    }

    public function getAdherentEmail(): ?string
    {
        return $this->adherentEmail;
    }

    public function setAdherentEmail(string $adherentEmail): self
    {
        $this->adherentEmail = $adherentEmail;

        return $this;
    }

    public function getAdherentPseudo(): ?string
    {
        return $this->adherentPseudo;
    }

    public function setAdherentPseudo(string $adherentPseudo): self
    {
        $this->adherentPseudo = $adherentPseudo;

        return $this;
    }

    public function getAdherentAge(): ?int
    {
        return $this->adherentAge;
    }

    public function setAdherentAge(int $adherentAge): self
    {
        $this->adherentAge = $adherentAge;

        return $this;
    }

    public function getAdherentPassword(): ?string
    {
        return $this->adherentPassword;
    }

    public function setAdherentPassword(string $adherentPassword): self
    {
        $this->adherentPassword = $adherentPassword;

        return $this;
    }

    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

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
            $idAnime->addIdAdherent($this);
        }

        return $this;
    }

    public function removeIdAnime(Anime $idAnime): self
    {
        if ($this->idAnime->removeElement($idAnime)) {
            $idAnime->removeIdAdherent($this);
        }

        return $this;
    }

}
