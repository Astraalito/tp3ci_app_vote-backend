<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\VoteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=VoteRepository::class)
 */
class Vote
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="votes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userID;

    /**
     * @ORM\ManyToOne(targetEntity=Choice::class, inversedBy="votes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $choiceID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserID(): ?User
    {
        return $this->userID;
    }

    public function setUserID(?User $userID): self
    {
        $this->userID = $userID;

        return $this;
    }

    public function getChoiceID(): ?Choice
    {
        return $this->choiceID;
    }

    public function setChoiceID(?Choice $choiceID): self
    {
        $this->choiceID = $choiceID;

        return $this;
    }
}
