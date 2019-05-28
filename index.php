<?php
require 'DoorFactoryInterface.php';
require 'DoorExpertInterface.php';
require 'DoorInterface.php';
require 'WoodenDoorFactory.php';
require 'IronDoorFactory.php';
require 'WoodenDoor.php';
require 'IronDoor.php';
require 'Carpenter.php';
require 'Welder.php';

$woodenDoorFactory = new WoodenDoorFactory();
$ironDoorFactory = new IronDoorFactory();


$woodenDoor = $woodenDoorFactory->makeDoor();
$carpenter = $woodenDoorFactory->makeExpert();

$ironDoor = $ironDoorFactory->makeDoor();
$welder = $ironDoorFactory->makeExpert();

echo $woodenDoor->getType().PHP_EOL;
echo $carpenter->getExpertise().PHP_EOL;

echo '------------------'.PHP_EOL;

echo $ironDoor->getType().PHP_EOL;
echo $welder->getExpertise().PHP_EOL;