<?php
require 'DoorFactory.php';
require 'WoodenDoorFactory.php';
require 'IronDoorFactory.php';

$woodenDoorFactory = new WoodenDoorFactory();
$door = $woodenDoorFactory->getDoor();
echo $door->getType().PHP_EOL;

$ironDoorFactory = new IronDoorFactory();
$irondoor = $ironDoorFactory->getDoor();
echo $irondoor->getType().PHP_EOL;