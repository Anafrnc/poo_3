<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;

    protected $maxSpeed = 10;

    public function addVehicle($Vehicle)
    {
        if ($Vehicle instanceof Bicycle or $Vehicle instanceof Skateboard){
            $this->currentVehicles[]= $Vehicle;
        }
    }

}
