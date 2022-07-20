<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kind
 *
 * @ORM\Table(name="kind")
 * @ORM\Entity", par "@ORM\Entity(repositoryClass= "App\Repository\KindRepository")
 */
class Kind
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_kind", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idKind;

    /**
     * @var string
     *
     * @ORM\Column(name="kind_label", type="string", length=25, nullable=false)
     */
    private $kindLabel;

    public function getIdKind(): ?int
    {
        return $this->idKind;
    }

    public function getKindLabel(): ?string
    {
        return $this->kindLabel;
    }

    public function setKindLabel(string $kindLabel): self
    {
        $this->kindLabel = $kindLabel;

        return $this;
    }


}
