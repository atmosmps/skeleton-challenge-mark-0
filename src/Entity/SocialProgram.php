<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SocialProgramRepository")
 */
class SocialProgram
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome_programa;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Familia", mappedBy="programaSocial")
     */
    private $familia;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomePrograma(): ?string
    {
        return $this->nome_programa;
    }

    public function setNomePrograma(string $nome_programa): self
    {
        $this->nome_programa = $nome_programa;

        return $this;
    }
    public function __toString()
    {
        return (string) $this->nome_programa;
    }
}
