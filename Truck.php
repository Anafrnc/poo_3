<?php

use http\QueryString;

class Truck extends Vehicle{

    private $energy;

    private $storage = 0;

    private $storageMax;

    const ALLOWED_ENERGIES = [
        "fuel","electric",
        ];

    public function __construct(string $color, int $nbSeats, string $energy, int $storageMax)
    {
        parent::__construct( $color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageMax=$storageMax;
    }

    public function getStorage(): int
    {
        return $this->storage;
    }
    public function setStorage(int $storage): void
    { if ($storage <= $this->storageMax) {
        $this->storage=$storage;
        }

    }

    public function getStorageMax()
    {
    return $this->storageMax;
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @return int
     */
    public function checkStorage(): string
    {
      if ($this->storage ===$this->storageMax){
          return 'Full';
      }else {
          return 'in filling';
      }
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
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