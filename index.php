<?php

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$twingo = new Car('red', 4, 'fuel');
$bicycle = new Bicycle('blue', 1);
$bicycleWay = new MotorWay();

$bicycleWay->addVehicle($bicycle);

var_dump($bicycleWay);

try{
    echo $twingo->start();
} catch (Exception $e){
    echo "Exeption received :" . $e->getMessage();
    $parkBrake = false;
    $twingo->setParkBrake($parkBrake);
    var_dump($twingo->setParkBrake($parkBrake));
}finally{
    echo "Ma voiture roule comme un donnut";
}


