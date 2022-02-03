<?php

namespace App\Entity;

use App\Repository\AccesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccesRepository::class)
 */
class Acces
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateurs::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Util;

    /**
     * @ORM\ManyToOne(targetEntity=Authorisation::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Autho;

    /**
     * @ORM\ManyToOne(targetEntity=Documents::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $doc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtil(): ?Utilisateurs
    {
        return $this->Util;
    }

    public function setUtil(?Utilisateurs $Util): self
    {
        $this->Util = $Util;

        return $this;
    }

    public function getAutho(): ?Authorisation
    {
        return $this->Autho;
    }

    public function setAutho(?Authorisation $Autho): self
    {
        $this->Autho = $Autho;

        return $this;
    }

    public function getDoc(): ?Documents
    {
        return $this->doc;
    }

    public function setDoc(?Documents $doc): self
    {
        $this->doc = $doc;

        return $this;
    }
}
