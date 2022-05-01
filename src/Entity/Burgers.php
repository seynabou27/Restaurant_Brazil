<?php

namespace App\Entity;

use App\Repository\BurgersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BurgersRepository::class)]
class Burgers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
