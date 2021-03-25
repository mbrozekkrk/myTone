<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $account_type;

    /**
     * @ORM\OneToOne(targetEntity=UserDetails::class, inversedBy="yes", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_details_id;

    /**
     * @ORM\OneToMany(targetEntity=Offert::class, mappedBy="event_firm")
     */
    private $yes;

    public function __construct()
    {
        $this->yes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getAccountType(): ?string
    {
        return $this->account_type;
    }

    public function setAccountType(string $account_type): self
    {
        $this->account_type = $account_type;

        return $this;
    }

    public function getUserDetailsId(): ?UserDetails
    {
        return $this->user_details_id;
    }

    public function setUserDetailsId(UserDetails $user_details_id): self
    {
        $this->user_details_id = $user_details_id;

        return $this;
    }

    /**
     * @return Collection|Offert[]
     */
    public function getYes(): Collection
    {
        return $this->yes;
    }

    public function addYe(Offert $ye): self
    {
        if (!$this->yes->contains($ye)) {
            $this->yes[] = $ye;
            $ye->setEventFirm($this);
        }

        return $this;
    }

    public function removeYe(Offert $ye): self
    {
        if ($this->yes->removeElement($ye)) {
            // set the owning side to null (unless already changed)
            if ($ye->getEventFirm() === $this) {
                $ye->setEventFirm(null);
            }
        }

        return $this;
    }
}
