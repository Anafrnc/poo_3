<?php


require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        "fuel","electric",];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct( $color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
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

    public function switchOn()
    {
        // TODO: Implement switchOn() method.
        return true;
    }

    public function switchOff()
    {
        return false;
    }

    public function start () : string {
        $sentence = "";
        $this->currentSpeed = 15;
        while ($this->currentSpeed < 20){
            $this->currentSpeed++;
            $sentence .= "let's go !"."<br>";
        } $sentence .= "stop !"."<br>";
        return $sentence;
    }

    public function setParkBrake(bool $park)
    {
        $this->$park = $park;
    }
}
