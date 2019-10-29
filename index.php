<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$truck = new Bicycle('red', 2);
$bicycle = new Bicycle('blue', 1);
$bicycleWay = new MotorWay();

$bicycleWay->addVehicle($truck);
$bicycleWay->addVehicle($bicycle);

var_dump($bicycleWay);