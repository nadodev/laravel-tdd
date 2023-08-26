<?php 


namespace Core\Orders;



class Product
{
    public function __construct(
        protected string $name,
        protected float $price,
        protected float $taxation = 0.10
    )
    {}

    public function getPrice(): float
    {
        return $this->price;
    }

    public function changePrice(float $price): void
    {
        $this->price = $price;
    }

    public function getTotal(string $name, float $price, int $quantity): float
    {
        $total = $price * $quantity;
        return $total;
    }

    public function setTaxation(float $taxation): void
    {
        $this->taxation = $taxation;
    }

    public function getTaxation(): float
    {
        return $this->taxation;
    }

    public function getTotalTaxation(string $name, float $price, int $quantity, float $taxation): float
    {
        $totalTaxation = ($price * $quantity) * $taxation;
        return $totalTaxation;
    }

}