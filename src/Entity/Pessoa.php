<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PessoaRepository")
 */
class Pessoa
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id;

//    /**
//     * @ORM\Column(type="integer")
//     */
//    private $familia_id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $sexo;

    /**
     * @ORM\Column(type="date")
     */
    private $data_nascimento;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $naturalidade;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $cpf;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $rg;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $estado_civil;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Familia", inversedBy="pessoa")
     * @ORM\JoinColumn(name="familia_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $familia;

    public function getId(): ?int
    {
        return $this->id;
    }
//
//    public function getFamiliaId(): ?int
//    {
//        return $this->familia_id;
//    }
//
//    public function setFamiliaId(int $familia_id): self
//    {
//        $this->familia_id = $familia_id;
//
//        return $this;
//    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getDataNascimento(): ?\DateTimeInterface
    {
        return $this->data_nascimento;
    }

    public function setDataNascimento(\DateTimeInterface $data_nascimento): self
    {
        $this->data_nascimento = $data_nascimento;

        return $this;
    }

    public function getNaturalidade(): ?string
    {
        return $this->naturalidade;
    }

    public function setNaturalidade(string $naturalidade): self
    {
        $this->naturalidade = $naturalidade;

        return $this;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getRg(): ?string
    {
        return $this->rg;
    }

    public function setRg(string $rg): self
    {
        $this->rg = $rg;

        return $this;
    }

    public function getEstadoCivil(): ?string
    {
        return $this->estado_civil;
    }

    public function setEstadoCivil(string $estado_civil): self
    {
        $this->estado_civil = $estado_civil;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFamilia()
    {
        return $this->familia;
    }

    /**
     * @param mixed $familia
     */
    public function setFamilia($familia): void
    {
        $this->familia = $familia;
    }
    public function __toString()
    {
        return (string) $this->nome;
    }
}
