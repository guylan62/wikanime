<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Origin
 *
 * @ORM\Table(name="origin")
 * @ORM\Entity", par "@ORM\Entity(repositoryClass= "App\Repository\OriginRepository")
 */
class Origin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_origin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrigin;

    /**
     * @var string
     *
     * @ORM\Column(name="origin_label", type="string", length=25, nullable=false)
     */
    private $originLabel;

    public function getIdOrigin(): ?int
    {
        return $this->idOrigin;
    }

    public function getOriginLabel(): ?string
    {
        return $this->originLabel;
    }

    public function setOriginLabel(string $originLabel): self
    {
        $this->originLabel = $originLabel;

        return $this;
    }


}
