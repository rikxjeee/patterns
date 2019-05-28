<?php
require 'DoorFactory.php';
require 'WoodenDoorFactory.php';
require 'IronDoorFactory.php';

$woodenDoorFactory = new WoodenDoorFactory();
$woodenDoorFactory->getDoor();
echo PHP_EOL;

$ironDoorFactory = new IronDoorFactory();
$ironDoorFactory->getDoor();
echo PHP_EOL;