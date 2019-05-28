<?php
require 'Door.php';

class DoorFactory
{
    public static function makeWoodenDoor(int $height, int $width)
    {
           return new Door($height, $width);
    }
}