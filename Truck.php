<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private int $storageCapacity;
    private int $cargo = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getCargo(): int
    {
        return $this->cargo;
    }

    public function setCargo(int $cargo): void
    {
        $this->cargo = $cargo;
    }

    public function isFilled () : string
    {   
        if ($this->cargo < $this->storageCapacity) {
            return 'In filling.';
        } 
        return 'Full.';
        
    }
}

?>