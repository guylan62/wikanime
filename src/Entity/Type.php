<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 *
 * @ORM\Table(name="type")
 * @ORM\Entity", par "@ORM\Entity(repositoryClass= "App\Repository\TypeRepository")
 */
class Type
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idType;

    /**
     * @var string
     *
     * @ORM\Column(name="type_label", type="string", length=25, nullable=false)
     */
    private $typeLabel;

    public function getIdType(): ?int
    {
        return $this->idType;
    }

    public function getTypeLabel(): ?string
    {
        return $this->typeLabel;
    }

    public function setTypeLabel(string $typeLabel): self
    {
        $this->typeLabel = $typeLabel;

        return $this;
    }


}
