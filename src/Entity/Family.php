<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="FamilyRepository")
 */
class Family
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $estado;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cidade;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $bairro;

    /**
     * @ORM\Column(type="integer")
     */
    private $cep;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logradouro;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_logradouro;

//    /**
//     * @ORM\Column(type="integer")
//     */
//    private $programa_social_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SocialProgram", inversedBy="familia")
     * @ORM\JoinColumn(name="programa_social_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $programaSocial;

    /**
     * @ORM\OneToMany(targetEntity="People", mappedBy="familia")
     */
    private $pessoa;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    public function setCidade(string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    public function setBairro(string $bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getCep(): ?int
    {
        return $this->cep;
    }

    public function setCep(int $cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    public function getLogradouro(): ?string
    {
        return $this->logradouro;
    }

    public function setLogradouro(string $logradouro): self
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    public function getNumLogradouro(): ?int
    {
        return $this->num_logradouro;
    }

    public function setNumLogradouro(int $num_logradouro): self
    {
        $this->num_logradouro = $num_logradouro;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProgramaSocial()
    {
        return $this->programaSocial;
    }

    /**
     * @param mixed $programaSocial
     */
    public function setProgramaSocial($programaSocial): void
    {
        $this->programaSocial = $programaSocial;
    }

    /**
     * @return mixed
     */
    public function getPessoa()
    {
        return $this->pessoa;
    }

    /**
     * @param mixed $pessoa
     */
    public function setPessoa($pessoa): void
    {
        $this->pessoa = $pessoa;
    }

//    public function getIdProgramaSocial(): ?int
//    {
//        return $this->programa_social_id;
//    }

//    public function setIdProgramaSocial(int $programa_social_id): self
//    {
//        $this->programa_social_id = $programa_social_id;
//
//        return $this;
//    }

}
