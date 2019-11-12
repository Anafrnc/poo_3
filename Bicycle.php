<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn()
    {
        // TODO: Implement switchOn() method.
        if ($this->currentSpeed > 10){
            return true;
        }else{
            return false;
        }
    }

    public function switchOff()
    {
        // TODO: Implement switchOff() method.
        return false;
    }
}