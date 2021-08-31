<?php

namespace App\Entity;

use App\Repository\StockBinRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StockBinRepository::class)
 */
class StockBin
{
    /**
     * @param string|null $name
     * @param int|null $pick_from
     * @param int|null $closest_pack_location
     */
    public function __construct(string $name = null, int $pick_from = null, int $closest_pack_location = null)
    {
        $this->setName($name);
        $this->setPickFrom($pick_from);
        $this->setClosestPackLocation($closest_pack_location);
    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="smallint")
     */
    private $pick_from;

    /**
     * @ORM\Column(type="smallint")
     */
    private $closest_pack_location;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPickFrom(): ?int
    {
        return $this->pick_from;
    }

    public function setPickFrom(int $pick_from): self
    {
        $this->pick_from = $pick_from;

        return $this;
    }

    public function getClosestPackLocation(): ?int
    {
        return $this->closest_pack_location;
    }

    public function setClosestPackLocation(int $closest_pack_location): self
    {
        $this->closest_pack_location = $closest_pack_location;

        return $this;
    }

    public function getProduct()
    {
        return $this->product;
    }
}
