<?php

require_once 'Bicycle.php';
require_once __DIR__.'/Car.php';

//create object of bike class
$bike = new Bicycle('red');

//set current speed to bike object
$bike->setCurrentSpeed(0);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . PHP_EOL;
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . PHP_EOL;
echo $bike->brake() . PHP_EOL;


//create object of Car class 
$car = new Car('blue' , 2 ,'Fuel');

//set cuurent spped to car object
$car->setCurrentSpeed(0);

// Moving car
echo $car->start();
echo $car->forward();
echo 'Vitesse du  car: ' . $car->getCurrentSpeed() . ' km/h' . PHP_EOL;
echo $car->brake();
echo 'Vitesse du car : ' . $car->getCurrentSpeed() . ' km/h' . PHP_EOL;
echo $car->brake() . PHP_EOL;

