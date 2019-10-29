<?php


abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles=[];

    /**
     * @var int
     */
    protected $nbLane;

    /**
     * @var int
     */
    protected $maxSpeed;

    public function getCurrentVehicle(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicle(array $currentVehicle): void
    {
        $this->currentVehicles = $currentVehicle;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(array $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(array $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract function addVehicle($Vehicle);
}

