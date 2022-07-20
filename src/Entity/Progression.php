<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Progression
 *
 * @ORM\Table(name="progression")
 * @ORM\Entity", par "@ORM\Entity(repositoryClass= "App\Repository\ProgressionRepository")
 */
class Progression
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_progression", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProgression;

    /**
     * @var string
     *
     * @ORM\Column(name="progression_label", type="string", length=25, nullable=false)
     */
    private $progressionLabel;

    public function getIdProgression(): ?int
    {
        return $this->idProgression;
    }

    public function getProgressionLabel(): ?string
    {
        return $this->progressionLabel;
    }

    public function setProgressionLabel(string $progressionLabel): self
    {
        $this->progressionLabel = $progressionLabel;

        return $this;
    }


}
