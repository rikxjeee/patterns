<?php

class IronDoorFactory implements DoorFactoryInterface
{
    public function makeDoor()
    {
        return new IronDoor();
    }

    public function makeExpert()
    {
        return new Welder();
    }
}