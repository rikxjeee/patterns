<?php
require 'DoorInterface.php';

abstract class DoorFactory
{
    protected abstract function makeDoor(): DoorInterface;

    public function getDoor()
    {
        $door = $this->makeDoor();
        $door->getType();
        return $door;
    }
}