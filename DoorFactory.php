<?php
require 'Door.php';

class DoorFactory
{
    public function makeWoodenDoor(int $height, int $width)
    {
           return new Door($height, $width, 'Wooden');
    }
}