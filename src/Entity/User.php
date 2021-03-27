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
     * @ORM\ManyToMany(targetEntity=Requirement::class, mappedBy="user_id")
     */
    private $requirement;

    /**
     * @ORM\ManyToMany(targetEntity=Skill::class, mappedBy="user_id")
     */
    private $skill;

    public function __construct()
    {

        $this->requirement = new ArrayCollection();
        $this->skill = new ArrayCollection();
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
     * @return Collection|Requirement[]
     */
    public function getRequirement(): Collection
    {
        return $this->requirement;
    }

    public function addRequirement(Requirement $requirement): self
    {
        if (!$this->requirement->contains($requirement)) {
            $this->requirement[] = $requirement;
            $requirement->addUserId($this);
        }

        return $this;
    }

    public function removeRequirement(Requirement $requirement): self
    {
        if ($this->requirement->removeElement($requirement)) {
            $requirement->removeUserId($this);
        }

        return $this;
    }

    /**
     * @return Collection|Skill[]
     */
    public function getSkill(): Collection
    {
        return $this->skill;
    }

    public function addSkill(Skill $skill): self
    {
        if (!$this->skill->contains($skill)) {
            $this->skill[] = $skill;
            $skill->addUserId($this);
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        if ($this->skill->removeElement($skill)) {
            $skill->removeUserId($this);
        }

        return $this;
    }
}
