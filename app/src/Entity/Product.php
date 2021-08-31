<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @param string|null $name
     * @param string|null $description
     * @param float|null $cost
     * @param int|null $stock
     */
    public function __construct(string $name = null, string $description = null, float $cost = null, int $stock = null, StockBin $stockBin = null)
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setCost($cost);
        $this->setStock($stock);
        $this->setStockBin($stockBin);
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
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $cost;

    /**
     * @ORM\Column(type="smallint")
     */
    private $stock;

    /**
     * @ORM\OneToOne(targetEntity="StockBin")
     * @ORM\JoinColumn(name="stock_bin_id", referencedColumnName="id")
     */
    private $stockBin;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function setStockBin(StockBin $stockBin): self
    {
        $this->stockBin = $stockBin;

        return $this;
    }

    public function getStockBin(): ?StockBin
    {
        return $this->stockBin;
    }
}
