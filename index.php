<?php
require 'Computer.php';
require 'ComputerFacade.php';


$computer = new ComputerFacade(new Computer());

$computer->turnOn();
echo 'Computer Ready!'.PHP_EOL;
echo PHP_EOL;
$computer->turnOff();