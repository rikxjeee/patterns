<?php
require 'WoodenDoor.php';

class WoodenDoorFactory extends DoorFactory
{
    protected function makeDoor(): DoorInterface
    {
        return new WoodenDoor();
    }
}