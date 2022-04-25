<?php

require_once 'Vehicle.php';

class Car extends Vehicle 
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = true;

    
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function changeParkBrake() 
    {
        if ($this->hasParkBrake === true) {
            $this->hasParkBrake = false;
        } else {
            $this->hasParkBrake = true;
        }
    }

    public function start(): string
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('Park brake is on.');
        }

        $this->currentSpeed = 50;
        return 'Go! <br>';
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

}

?>