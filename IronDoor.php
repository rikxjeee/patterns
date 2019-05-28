<?php

class IronDoor implements DoorInterface
{
    public function getType()
    {
        echo 'This is an iron door.';
    }
}