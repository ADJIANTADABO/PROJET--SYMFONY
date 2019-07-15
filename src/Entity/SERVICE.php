<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SERVICERepository")
 */
class SERVICE
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Employer", mappedBy="service")
     */
    private $Employer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libele;

    public function __construct()
    {
        $this->Employer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Employer[]
     */
    public function getEmployer(): Collection
    {
        return $this->Employer;
    }

    public function addEmployer(Employer $employer): self
    {
        if (!$this->Employer->contains($employer)) {
            $this->Employer[] = $employer;
            $employer->setService($this);
        }

        return $this;
    }

    public function removeEmployer(Employer $employer): self
    {
        if ($this->Employer->contains($employer)) {
            $this->Employer->removeElement($employer);
            // set the owning side to null (unless already changed)
            if ($employer->getService() === $this) {
                $employer->setService(null);
            }
        }

        return $this;
    }

    public function getLibele(): ?string
    {
        return $this->libele;
    }

    public function setLibele(string $libele): self
    {
        $this->libele = $libele;

        return $this;
    }
}
