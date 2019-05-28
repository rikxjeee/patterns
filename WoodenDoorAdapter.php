<?php


class WoodenDoorAdapter implements IronDoorInterface
{
    private $door;

    public function __construct(WoodenDoor $door)
    {
        $this->door = $door;
    }

    public function fixWithRivetGun()
    {
        $this->door->fixDoorWithHammer();
    }
}