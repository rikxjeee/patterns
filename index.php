<?php
require 'DoorFactory.php';
$height = (int)readline('Your doors height: ');
$width = (int)readline('Your doors width: ');
$doorFactory = new DoorFactory();
$door = $doorFactory->makeWoodenDoor($height, $width);

var_dump($door);