<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    protected $nbLane = 2;

    protected $maxSpeed = 50;

    public function addVehicle($Vehicle)
    {
        if ($Vehicle instanceof Vehicle){
            $this->currentVehicles[]= $Vehicle;
        }
    }

}
