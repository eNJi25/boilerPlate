<?php

namespace App\Entity;

use App\Repository\ModeleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModeleRepository::class)]
class Modele
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $libelle = null;

    #[ORM\ManyToOne(inversedBy: 'modeles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Marque $marque = null;

    /**
     * @var Collection<int, Moto>
     */
    #[ORM\OneToMany(targetEntity: Moto::class, mappedBy: 'modele')]
    private Collection $motos;

    public function __construct()
    {
        $this->motos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * @return Collection<int, Moto>
     */
    public function getMotos(): Collection
    {
        return $this->motos;
    }

    public function addMoto(Moto $moto): static
    {
        if (!$this->motos->contains($moto)) {
            $this->motos->add($moto);
            $moto->setModele($this);
        }

        return $this;
    }

    public function removeMoto(Moto $moto): static
    {
        if ($this->motos->removeElement($moto)) {
            // set the owning side to null (unless already changed)
            if ($moto->getModele() === $this) {
                $moto->setModele(null);
            }
        }

        return $this;
    }
}
