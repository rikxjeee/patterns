<?php
require 'IronDoor.php';

class IronDoorFactory extends DoorFactory
{
    protected function makeDoor(): DoorInterface
    {
        return new IronDoor();
    }
}