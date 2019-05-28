<?php

class WoodenDoorFactory implements DoorFactoryInterface
{
    public function makeDoor()
    {
        return new WoodenDoor();
    }

    public function makeExpert()
    {
        return new Carpenter();
    }
}