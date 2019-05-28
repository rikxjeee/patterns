<?php
require 'DoorFactory.php';
$height = (int)readline('Your doors height: ');
$width = (int)readline('Your doors width: ');

$door = DoorFactory::makeWoodenDoor($height, $width);

var_dump($door);